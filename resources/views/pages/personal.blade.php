
@extends('layouts.main', ['title' => 'Personal', 'menu_item' => 'personal', 'personal_nav_selected' => 'nav-personal-selected selected'])

@section('content')
	<script>
	jQuery(document).ready(function($) {
		var username = "katie";
		var hostname = "therealkatierose.com";
		var linktext = username + "@" + hostname ;
		$('#tricky').append("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linktext + "</a>");
		console.log($("#tricky"));
	})
	</script>

		<div id="container" class="js-masonry container-size" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".item"
		,  "stamp": ".stamp"}'>
		<!-- "percentPosition": true, -->
			<div class="grid-sizer"></div><div class="gutter-sizer"></div>
			<div class="item w40"><div class="item-wrapper" data-show-footer="false" data-type="">
				<a href="images/content/personal/fullsize/CostaRica.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/personal/gallery/CostaRica_sm.jpg">
				</a>
			</div></div>
			<div class="item w30 personal-info">
				<div class="personal-info-text">
					<h3>Thanks for stopping by!</h3>
					As you've probably figured out by now, I'm Katie Rose. Turns out there are actually quite a few Katie Roses out there in the world, so
					congratulations on finding the real one. As you can see, I have a few eclectic interests. Hopefully you're enjoying browsing around.
					<p><p>
					As far as that "about me" stuff, here are the basics:
					<dl><dt></dt>
						<dd>I'm from Alexandria, VA (Metro DC area) for the most part, although I've lived all over the country.</dd>
						<dd>I just got married in Aug 2014 in Brooklyn, NY. That was pretty awesome.</dd>
						<dd>I went to the University of Pittsburgh.</dd>
						<dd>I was in two improv troupes in NJ.</dd>
						<dd>I'm a Steelers and Skins fan. Discuss.</dd>
					</dl>
				<p></p>
					OK, that's a lot of sentences starting with "I" so let's move on. If you want to reach out to me, you can email me at <span id="tricky"></span>.

				</div>
			</div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="false" data-type="">
				<a href="images/content/personal/fullsize/GrandmaKiss.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/personal/gallery/GrandmaKiss_sm.jpg">
				</a>
			</div></div>

			<div class="item w20"><div class="item-wrapper" data-show-footer="false" data-type="">
				<a href="images/content/personal/fullsize/KatiePres.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/personal/gallery/KatiePres_sm.jpg">
				</a>
			</div></div>

			<div class="item w30"><div class="item-wrapper" data-show-footer="false" data-type="">
				<a href="images/content/personal/fullsize/UsWaterfront.jpg" class="without-caption image-link">
					<img alt="" class="img-responsive" src="images/content/personal/gallery/UsWaterfront_sm.jpg">
				</a>
			</div></div>
			<div class="item w40 football-title text-center">
				<div class="title-relative">
					<div class="title-text">
						Personal
					</div>
					<div class="title-text-shadow">
						Personal
					</div>
				</div>
			</div>
		</div>


@stop