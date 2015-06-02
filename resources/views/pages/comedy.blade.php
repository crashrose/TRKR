
@extends('layouts.main', ['title' => 'Comedy', 'menu_item' => 'comedy', 'comedy_nav_selected' => 'nav-comedy-selected selected'])

@section('content')

	<div id="container" class="js-masonry container-size" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".item"
	, "percentPosition": true, "stamp": ".stamp"}'>
	<!-- "percentPosition": true, -->
		<div class="grid-sizer"></div><div class="gutter-sizer"></div>
		<div class="item w40"><div class="item-wrapper" data-show-title="false" data-type="">
			<a href="images/content/comedy/fullsize/PBHeadshotPurple.jpg" class="without-caption image-link"><img alt="" class="img-responsive" src="images/content/comedy/gallery/PBHeadshotPurple_sm.jpg"></a>
		</div></div>
		<div class="item w30"><div class="item-wrapper" data-show-title="false" data-type="">
			<a href="images/content/comedy/fullsize/KatieBlueTie2.jpg" class="without-caption image-link"><img alt="" class="img-responsive" src="images/content/comedy/gallery/KatieBlueTie2_sm.jpg"></a>
		</div></div>
		<div class="item w40 artwork-title text-center">
			<div class="title-relative">
				<div class="title-text">
					Comedy
				</div>
				<div class="title-text-shadow">
					Comedy
				</div>
			</div>
		</div>
		<div class="item w50"><div class="item-wrapper bg-orange" data-show-title="false" data-type="">
			<div id='calendar'></div>
		</div></div>
		<div class="item w30"><div class="item-wrapper" data-show-title="false" data-type="">
			<a href="images/content/comedy/fullsize/BWComedyHeadshot.jpg" class="without-caption image-link"><img alt="" class="img-responsive" src="images/content/comedy/gallery/BWComedyHeadshot_sm.jpg"></a>
		</div></div>
		<div class="item w20"><div class="item-wrapper" data-show-title="false" data-type="">
			<a href="images/content/comedy/fullsize/RedDoorHeadshot.jpg"  class="without-caption image-link"><img alt="" class="img-responsive" src="images/content/comedy/gallery/RedDoorHeadshot_sm.jpg"></a>
		</div></div>
		<div class="item w20"><div class="item-wrapper" data-show-title="false" data-type="">
			<a href="images/content/comedy/fullsize/KatieCopHeadshot.jpg" class="without-caption image-link"><img alt="" class="img-responsive" src="images/content/comedy/gallery/KatieCopHeadshot_sm.jpg"></a>
		</div></div>
<!-- 		<div class="item w20"><div class="item-wrapper" data-show-title="false" data-type="">
			<a href="images/content/comedy/fullsize/KatieImprovClass_2.jpg" class="without-caption image-link"><img alt="" class="img-responsive" src="images/content/comedy/gallery/KatieImprovClass_2_sm.jpg"></a>
		</div></div> -->
	</div>




@stop