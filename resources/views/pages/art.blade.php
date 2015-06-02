
@extends('layouts.main', ['title' => 'Artwork', 'menu_item' => 'art', 'art_nav_selected' => 'nav-art-selected selected'])

@section('content')
		<div id="container" class="js-masonry container-size" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".item"
		, "percentPosition": true, "stamp": ".stamp"}'>

			<div class="grid-sizer"></div><div class="gutter-sizer"></div>
			<div class="item w40"><div class="item-wrapper" data-show-footer="true" data-type="Design">
				<a href="images/content/artwork/fullsize/NYS2014BusCard_2.png" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/NYS2014BusCard_2_sm.png">
				</a>
			</div></div>
			<div class="item w20"><div class="item-wrapper" data-show-footer="true" data-type="Photography">
				<a href="images/content/artwork/fullsize/IrelandChapel.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/IrelandChapel_sm.jpg">
				</a>
			</div></div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Painting">
				<a href="images/content/artwork/fullsize/RosePainting.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/RosePainting_sm.jpg">
				</a>
			</div></div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Photography">
				<a href="images/content/artwork/fullsize/Parrot.jpg"  class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/Parrot_sm.jpg">
				</a>
			</div></div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Photography">
				<a href="images/content/artwork/fullsize/IrelandCoast.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/IrelandCoast_sm.jpg">
				</a>
			</div></div>
			<div class="item w10"><div class="item-wrapper" data-show-footer="true" data-type="Drawing">
				<a href="images/content/artwork/fullsize/woodenman_2.png" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/woodenman_2_sm.png">
				</a>
			</div></div>
			<div class="item w40 artwork-title text-center">
				<div class="title-relative">
					<div class="title-text">
						Artwork
					</div>
					<div class="title-text-shadow">
						Artwork
					</div>
				</div>
			</div>
			<div class="item w20"><div class="item-wrapper" data-show-footer="true" data-type="Photography">
				<a href="images/content/artwork/fullsize/ShelbyBW.jpg"  class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/ShelbyBW_sm.jpg">
				</a>
			</div></div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Drawing">
				<a href="images/content/artwork/fullsize/GreenTree.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/GreenTree_sm.jpg">
				</a>
			</div></div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Design">
				<a href="images/content/artwork/fullsize/NYS2014Ticket_2.jpg"  class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/NYS2014Ticket_2_sm.jpg">
				</a>
			</div></div>
			<div class="item w10"><div class="item-wrapper" data-show-footer="true" data-type="Drawing">
				<a href="images/content/artwork/fullsize/rhino.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/rhino_sm.jpg">
				</a>
			</div></div>
			<div class="item w10"><div class="item-wrapper" data-show-footer="true" data-type="Design">
				<a href="images/content/artwork/fullsize/NYS2014SchedCard_2.jpg"  class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/NYS2014SchedCard_2_sm.jpg">
				</a>
			</div></div>
			<div class="item w20"><div class="item-wrapper" data-show-footer="true" data-type="Painting">
				<a href="images/content/artwork/fullsize/HeronPainting.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/HeronPainting_sm.jpg">
				</a>
			</div></div>
			<div class="item w20"><div class="item-wrapper" data-show-footer="true" data-type="Design">
				<a href="images/content/artwork/fullsize/MediaKitFront.jpg"  class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/MediaKitFront_sm.jpg">
				</a>
			</div></div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Photography">
				<a href="images/content/artwork/fullsize/HeronNest2.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/HeronNest2_sm.jpg">
				</a>
			</div></div>
			<div class="item w20"><div class="item-wrapper" data-show-footer="true" data-type="Drawing">
				<a href="images/content/artwork/fullsize/BWTree.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/BWTree_sm.jpg">
				</a>
			</div></div>
			<div class="item w20"><div class="item-wrapper" data-show-footer="true" data-type="Drawing">
				<a href="images/content/artwork/fullsize/3209Sketch.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/3209Sketch_sm.jpg">
				</a>
			</div></div>
			<!-- <div class="item w10"><div class="item-wrapper" data-show-footer="true" data-type="Design">
			<a href="images/content/artwork/fullsize/PiratesOfPenzance.jpg"  class="without-caption image-link">
				<img alt="" class="img-responsive" src="images/content/artwork/gallery/PiratesOfPenzance.jpg_sm"></a>
			</di
			v></div> -->
			<div class="item w20"><div class="item-wrapper" data-show-footer="true" data-type="Painting">
				<a href="images/content/artwork/fullsize/AbstractPainting.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/artwork/gallery/AbstractPainting_sm.jpg">
				</a>
			</div></div>
		</div>



@stop