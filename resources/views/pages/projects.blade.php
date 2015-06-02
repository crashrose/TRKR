
@extends('layouts.main', ['title' => 'Projects', 'menu_item' => 'projects', 'projects_nav_selected' => 'nav-projects-selected selected'])

@section('content')

<div id="container" class="js-masonry container-size" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".item"
	, "percentPosition": true, "stamp": ".stamp"}'>
	<!-- "percentPosition": true, -->
		<div class="grid-sizer"></div><div class="gutter-sizer"></div>
		<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Javascript"><div><h2>Peg Jumping Game</h2></div>
			<div><a href="/peg_game"><img alt="Peg Jumping Game" class="img-responsive" src="images/content/projects/peg_game.png"></a></div>
			<div class="item-text">
				<span>Javascript version of the simple solitaire game.</span>
			</div>
		</div></div>
		<div class="item w40 artwork-title text-center">
			<div class="title-relative">
				<div class="title-text">
					Projects
				</div>
				<div class="title-text-shadow">
					Projects
				</div>
			</div>
		</div>
		<div class="item w50"><div class="item-wrapper" data-show-footer="true" data-type="PHP"><div><h2>Joomla Attendance Component</h2></div>
			<div class="item-inline"><a href="https://github.com/crashrose/Joomla-Attendance"><img alt="Joomla Attendance Component" class="img-responsive" src="images/content/projects/Attendance.jpg"></a>
				<div class="item-text item-text-inline-right">
					<span>This component, built for the Joomla CMS, handles attendees, RSVPs, approvals, reporting, locations, and custom
					event types with role-based access and event assignments. Originally built to manage player attendance for the New York Sharks, it has
					been built out so that it can be installed and utilized on any 2.x Joomla installation.</span>
				</div>
			</div>
		</div></div>
		<div class="item w40"><div class="item-wrapper" data-show-footer="true" data-type="Java"><div><h2>Othello Game</h2></div>
			<div class="item-inline">
				<div class="item-text item-text-inline-left">
					<span>This is a standalone Java gui implementation of the classic board game. The code is available as a Gist on Github.</span>
				</div>
				<a href="https://gist.github.com/crashrose/7745012"><img alt="Othello" class="img-responsive" src="images/content/projects/Othello.jpg"></a>
			</div>
		</div></div>
		<div class="item w30"><div class="item-wrapper" data-show-footer="true" data-type="Python"><div><h2>2048 Game</h2></div>
			<div><a href="https://github.com/crashrose/Py2048"><img alt="Python 2048 Game" class="img-responsive" src="images/content/projects/2048_game.jpg"></a></div>
			<div class="item-text">
				<span>This is a simple console-based version of the popular game built in Python. The code can be accessed on Github.</span>
			</div>
		</div></div>
		<div class="item w50"><div class="item-wrapper" data-show-footer="true" data-type="Various">
			<h2>Service-Now SLA Validation Tool</h2>
			<div class="item-text">
				<span>Coming Soon!<BR>This tool will allow users to recalculate and validate historical SLA durations from Service-Now, accounting for schedules
			 (including holidays and weekends), start/stop conditions, and any time the clock was paused. The tool will perform the calculations via 
			 Service-Now XML exports of relevant configuration and event log data.</span>
			</div>
		</div></div>

	</div>


@stop