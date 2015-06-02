@extends('layouts.main', ['title' => 'Home', 'menu_item' => 'home' ,'home_nav_selected' => 'nav-home-selected selected'])


@section('content')
<div class="front-banner center-block">
	<div class="front-logo-image center-block">
		<img alt="The Real Katie Rose" class="img-responsive main-banner" src="images/branding/TRKRLogo2.gif">
	</div>
	<div class="front-logo-text text-center">
		<h1>Don't be fooled by imitations!</h1>
	</div>
</div>
<ul class="menu-main no-pad">
	<li class="col-md-2 col-sm-2 no-pad menu_navigation">
		<div class="green0 menu-color"><a href="/projects">
			<img alt="Dev Projects" class="img-responsive menu-image" src="images/menu/programming.jpg"></a>
			
			<div class="menu-title"><a href="/projects"><span class="text-nowrap text-uppercase">Dev Projects</span></a></div>
		</div>
	</li>
	<li class="col-md-2 col-sm-2 no-pad menu_navigation">
		<div class="purple0 menu-color"><a href="/comedy">
			<img alt="Comedy" class="img-responsive menu-image" src="images/menu/comedy.jpg"></a>
			
			<div class="menu-title"><a href="/comedy"><span class="text-nowrap text-uppercase">Comedy</span></a></div>
		</div>
	</li>
	<li class="col-md-2 col-sm-2 no-pad menu_navigation">
		<div class="orange0 menu-color"><a href="/football">
			<img alt="Football" class="img-responsive menu-image" src="images/menu/football.jpg"></a>
			
			<div class="menu-title"><a href="/football"><span class="text-nowrap text-uppercase">Football</span></a></div>
		</div>
	</li>
	<li class="col-md-2 col-sm-2 no-pad menu_navigation">
		<div class="yellow0 menu-color"><a href="/art">
			<img alt="Artwork" class="img-responsive menu-image" src="images/menu/artwork.jpg"></a>
			
			<div class="menu-title"><a href="/art"><span class="text-nowrap text-uppercase">Art</span></a></div>
		</div>
	</li>
	<li class="col-md-2 col-sm-2 no-pad menu_navigation">
		<div class="blue0 menu-color"><a href="/personal">
			<img alt="Personal" class="img-responsive menu-image" src="images/menu/personal.jpg"></a>

			<div class="menu-title"><a href="/personal"><span class="text-nowrap text-uppercase">Personal</span></a></div>
		</div>
	</li>
	<li class="col-md-2 col-sm-2 no-pad menu_navigation">
		<div class="red0 menu-color"><a href="/resume">
			<img alt="Résumé" class="img-responsive menu-image" src="images/menu/resume.jpg"></a>

			<div class="menu-title"><a href="/resume"><span class="text-nowrap text-uppercase">Résumé</span></a></div>
		</div>
	</li>
</ul>
@stop