
	$(function() {

		var $container = $('#container');
		// initialize Masonry after all images have loaded  
		$container.imagesLoaded( function() {
			$container.masonry();
		});

		$('.item-wrapper').each(function(){
			if ($(this).data('type') && $(this).data('show-footer')==true) {
				$(this).append('<div class="text-right item-footer">' + $(this).data('type') + "</div>");
			}
		})

		$('.without-caption').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			closeBtnInside: false,
			image: {
				verticalFit: true
			},
			gallery:{enabled:true},
			zoom: {
				enabled: true,
				duration: 300 // don't foget to change the duration also in CSS
			}
		});

		$('.with-caption').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
				}
			},
			zoom: {
				enabled: true
			}
		});

	});
