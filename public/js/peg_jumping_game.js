jQuery(document).ready(function($) {


    $('#table-2048').each(function() {
        var play = new game_2048($(this));
    })

    function game_2048(table) {
        var dir_array = [[-1,0], [0,1],[1,0],[0,-1]];
        var table_element = table;
        this.table_element = table_element;
        var empty_cells = [];
        this.test = [[{'row':1, 'col':1}],'test'];
        // var initGrid = [[-1,-1,1,1,1,-1,-1],
        //     [-1,1,1,1,1,1,-1],
        //     [1,1,1,1,1,1,1],
        //     [1,1,1,0,1,1,1],
        //     [1,1,1,1,1,1,1],
        //     [-1,1,1,1,1,1,-1],
        //     [-1,-1,1,1,1,-1,-1]];
        var initGrid = [[-1,-1,1,1,1,-1,-1],
            [-1,-1,1,1,1,-1,-1],
            [1,1,1,1,1,1,1],
            [1,1,1,0,1,1,1],
            [1,1,1,1,1,1,1],
            [-1,-1,1,1,1,-1,-1],
            [-1,-1,1,1,1,-1,-1]];
        for (var i=0;i<7;i++)
            {
            for (var j=0;j<7;j++)
                {
                  initGrid[i][j] = {'row':i, 'col':j, 'val':initGrid[i][j], 'valid_from':{}, 'valid_to':{}};
                  cell_display(i,j);
                }
            }
            get_draggable_pegs();

            function cell_display (i,j) {
                var cur_cell = $($($(table_element).children('.gameplay')[i]).children('.gameplay')[j]);

                if (initGrid[i][j]['val'] == -1) {
                    cur_cell.addClass('out-of-play');
                    cur_cell.text('');
                    return;
                } else if (initGrid[i][j]['val'] == 0) {
                    empty_cells.push(i + "_" + j);

                } else {
                    cur_cell.append('<div class="peg peg-' + initGrid[i][j]['val'] + '"><section class="stage"><figure class="ball"></figure></section></div>');
                    cur_cell.children('.peg').data('row', i);
                    cur_cell.children('.peg').data('col', j);
                }
                cur_cell.children('.peg').data('letter_id', String.fromCharCode(i + 'A'.charCodeAt(0)) +"_" + String.fromCharCode(j + 'A'.charCodeAt(0)));
                    cur_cell.data('row', i);
                    cur_cell.data('col', j);
                    cur_cell.addClass('gamepiece');
                    cur_cell.attr('id', 'cell-' + i + "_" + j);
                    
            }

            function get_draggable_pegs (current_peg) {
                
                var peg_cell;
                $.each(empty_cells,function(index, cellstring){
                    var cell = cellstring.split("_");
                    var cell_row = Number(cell[0]);
                    var cell_col = Number(cell[1]);
                    var empty_cell = $($($(table_element).children('.gameplay')[cell_row]).children('.gameplay')[cell_col]);  
                    console.log(empty_cell);
                    console.log($("#cell-4_2").children('.peg').hasClass('ui-draggable'));
                    empty_cell.droppable({
                                drop: function(event, ui) {
                                    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } ),
                                    peg_move(ui.draggable,$(this));
                                }
                            });
                    cell['allow'] = [];
                    var peg_cell_loc;
                    $.each(dir_array, function(n, dir){
                        var dir_y = dir[0];
                        var dir_x = dir[1];

                        if ((cell_row + (dir_y*2)) >= 0 && (cell_row + (dir_y*2)) <= initGrid.length-1 && (cell_col + (dir_x*2)) >= 0 && (cell_col + (dir_x*2)) <= initGrid[cell_row].length-1) {
                            
                            if (initGrid[(dir_y+cell_row)][(dir_x+cell_col)]['val'] == 1 && initGrid[((dir_y*2)+cell_row)][((dir_x*2)+cell_col)]['val'] == 1) {
                                cell['allow'].push(((dir_y*2)+cell_row) + '_' + ((dir_x*2)+cell_col));
                                peg_cell = $($($(table_element).children('.gameplay')[((dir_y*2)+cell_row)]).children('.gameplay')[((dir_x*2)+cell_col)]).children()[0];
                                peg_cell_loc = $(peg_cell).data("row") + "_" + $(peg_cell).data("col");
                                $(peg_cell).addClass("green");
                                $(peg_cell).draggable({
                                    revert: "invalid"
                                });

                            }
                        }
                    })

                    empty_cell.droppable( "option", "accept", function(peg){
                        var peg_cell = $(peg).parent().data("row") + '_' + $(peg).parent().data("col");
                        if (cell['allow'].indexOf(peg_cell) !=   -1) {  
                            return true;
                        } else {
                            if (current_peg) {
                                if (current_peg.parent().data("row") + '_' + current_peg.parent().data("col") == peg_cell) {
                                    current_peg.draggable("destroy");
                                }
                            }
                            return false;
                        }
                    });
                })
            }

            function peg_move (peg, cell) {
                var from_row = peg.data('row');
                var from_col = peg.data('col');
                var to_row = cell.data('row');
                var to_col = cell.data('col');

                peg.data('row', to_row);
                peg.data('col', to_col);
                peg.detach().appendTo(cell);
                peg.css({'top': 0, 'left' : 0})
                $('.peg').removeClass("green");
                cell.droppable( "destroy" );
                if (from_row != to_row) {
                    var jumped_col = to_col;
                    var jumped_row = ((from_row - to_row) / 2) + to_row;
                } else {
                    var jumped_row = to_row;
                    var jumped_col = ((from_col - to_col) / 2) + to_col;
                }
                console.log(from_row + "_" + from_col + " to " + to_row +"_" + to_col + " jumping " + jumped_row + "_" + jumped_col);
                var jumped_cell = $($($(table_element).children('.gameplay')[jumped_row]).children('.gameplay')[jumped_col]);
                initGrid[jumped_row][jumped_col]['val'] = 0;
                initGrid[from_row][from_col]['val'] = 0;
                initGrid[to_row][to_col]['val'] = 1;
                empty_cells.splice($.inArray(to_row + "_" + to_col, empty_cells),1);
                empty_cells.push(jumped_row + "_" + jumped_col);
                empty_cells.push(from_row + "_" + from_col);
                jumped_cell.children('.peg').remove();
$('.ui-draggable').not(".ui-draggable-dragging").draggable("destroy");
                get_draggable_pegs(peg);
            }

            this.populate_space_vals = function(grid){
                var i = 0,  j = 0;
                table.children.each(function(i) {
                })
            }
    };
});
