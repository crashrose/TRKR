@extends('layouts.main', ['title' => 'Peg Jumping Game', 'menu_item' => 'projects', 'projects_nav_selected' => 'nav-projects-selected selected'])

@section('content')

<h4>This is a basic implementation of the common peg jumping game. The rules are simple: You can only move up, down, left, or right. A valid move requires that you "jump"
over one other peg into an empty hole on the other side. When a peg is "jumped" it is removed from the board. The goal is to have only one peg remaining.</h4>

<h4>Good Luck!</h4>

		<div id="table-2048" class="main-table col-md-12">
			<div class="row-2048 gameplay row row-num-1">
				<div class="cell-2048 gameplay cell-num-1 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-2 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-3 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-4 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-5 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-6 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-7 col-md-3">
				</div>
			</div>
			<div class="row-2048 gameplay row row-num-2">
				<div class="cell-2048 gameplay cell-num-1 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-2 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-3 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-4 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-5 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-6 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-7 col-md-3">
				</div>
			</div>
			<div class="row-2048 gameplay row row-num-3">
				<div class="cell-2048 gameplay cell-num-1 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-2 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-3 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-4 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-5 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-6 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-7 col-md-3">
				</div>
			</div>
			<div class="row-2048 gameplay row row-num-4">
				<div class="cell-2048 gameplay cell-num-1 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-2 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-3 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-4 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-5 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-6 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-7 col-md-3">
				</div>
			</div>
			<div class="row-2048 gameplay row row-num-5">
				<div class="cell-2048 gameplay cell-num-1 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-2 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-3 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-4 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-5 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-6 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-7 col-md-3">
				</div>
			</div>
			<div class="row-2048 gameplay row row-num-6">
				<div class="cell-2048 gameplay cell-num-1 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-2 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-3 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-4 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-5 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-6 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-7 col-md-3">
				</div>
			</div>
			<div class="row-2048 gameplay row row-num-7">
				<div class="cell-2048 gameplay cell-num-1 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-2 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-3 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-4 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-5 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-6 col-md-3">
				</div>
				<div class="cell-2048 gameplay cell-num-7 col-md-3">
				</div>
			</div>
		</div>

@stop


