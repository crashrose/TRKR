
@extends('layouts.main', ['title' => 'Resume', 'menu_item' => 'resume', 'resume_nav_selected' => 'nav-resume-selected selected'])


@section('content')

		<div id="container" class="js-masonry container-size" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".item"
		,  "stamp": ".stamp"}'>
		<!-- "percentPosition": true, -->
			<div class="grid-sizer"></div><div class="gutter-sizer"></div>
			<div class="item w30"><div class="item-wrapper" data-show-footer="false" data-type="Education & Certifications">
				<div class="item-title"><h2>Education & Certifications</h2></div>
				<div class="item-text item-text-wrapper">
					<h3>Bachelor of Science</h3>
					<h4>University of Pittsburgh, 2002</h4>
					<h5>Major: Economics</h5>
					<h5>Related Area: Computer Science</h5>

					<h3>Six Sigma Black Belt Course</h3>
					<h4>Villanova University, 2007</h4>

					<h3>ITIL® V3 Foundation</h3>
					<h4>Certified 2009</h4>
				</div>
			</div></div>

			<div class="item w40"><div class="item-wrapper" data-show-footer="false" data-type="Skills">
				<div class="item-title"><h2>Skills</h2></div>
				<div class="item-text item-text-wrapper">
					<h3>Languages & Frameworks</h3>
					<h4>JavaScript, Ruby on Rails, PHP, HTML5, CSS, Python, Java, ASP, VB, VBScript, C++, jQuery, Bootstrap, Joomla, Wordpress, Laravel</h4>

					<h3>Databases</h3>
					<h4>MySQL, Oracle, PostgreSQL, SQL</h4>

					<h3>Reporting/BI Tools</h3>
					<h4>BusinessObjects, Crystal Reports, Cognos, Microstrategy, JasperSoft</h4>

					<h3>Other Tools/Services</h3>
					<h4>Git, Heroku, Illustrator, Photoshop, Service-Now, HP Service Manager, Remedy, TrackIt</h4>
				</div>
			</div></div>
			<div class="item w50"><div class="item-wrapper" data-show-footer="false" data-type="Experience">
				<div class="item-title"><h2>Experience</h2></div>
				<div class="item-text item-text-wrapper">
					<h3>RockettMedia, LLC</h3>
					<dl>
					  <dt class="title-large"><span>Owner/Developer (June 2014 to present)</span></dt>
					  	<dd><span>Development of a multi-function sports management online service using Ruby on Rails, including integration with Google Maps, Google Calendar, and PayPal APIs.</span></dd>
						<dd><span>Build requirements and specifications for all application enhancements and modifications.</span></dd>
						<dd><span>Perform all functions necessary for day-to-day management of business.</span></dd>
					</dl>
					<h3>CompuCom, Inc.</h3>
					<dl>
						<dt class="title-large"><span>Program Management Specialist (March 2007 to May 2014)</span></dt>
						<dd><span>Developed and managed contractual and non-contractual service delivery metrics and measurements for over 45 clients across multiple tools.</span></dd>
						<dd><span>Acted as SME for Service-Now SLA's, schedules, metrics, reporting, data categorization, and various modules and business rules.</span></dd>
						<dd><span>Performed analysis and process improvement exercises on poorly performing accounts as requested by executive management.</span></dd>
						<dt class="accomp"><span>Key Accomplishments</span></dt>
						<dd><span>Defined SLA configuration standards within Service-Now and retrofitted previously existing SLA rules to new, more accurate standards.</span></dd>
						<dd><span>Assisted the solutioning team in building a standardized Statement of Work contract to ensure new contracts would include accurately measurable SLAs and KPIs.</span></dd>
						<dd><span>Received CompuCom STARS award in 2008, given to only 21 of over 11,000 employees in recognition of significant contributions and impact to the organization.</span></dd>
					</dl>
					<h3 class="with-subhead"><span>CompuCom, Inc. assigned to Pfizer, Inc.</span><BR><span class="subhead"><small>(previously assigned to Pfizer by CCN, Inc.)</small></span></h3>
					<dl>
						<dt class="title-large"><span>Team Lead (March 2006 to March 2007)</span></dt>
						<dd><span>Managed real-time operations for incoming requests via call, email, and web.</span></dd>
						<dd><span>Assisted analysts with following proper procedures.</span></dd>
						<dd><span>Provided second level customer service to clients when escalated.</span></dd>
						<dd><span>Complete special projects and analysis to improve day-to-day performance of the help desk.</span></dd>
						<dt class="title-large"><span>2nd Level Outlook Support Team (June 2005 to March 2006)</span></dt>
						<dd><span>Provided 2nd level Outlook and Blackberry Support. </span></dd>
						<dd><span>Performed account administration for Exchange 5.5 & 2003, BES 3.6, and Active Directory.</span></dd>
						<dt class="title-large"><span>2nd Level Account Management Analyst (Feb 2005 to June 2005)</span></dt>
						<dd><span>Performed 2nd level account management for NT, Active Directory and Exchange accounts according to the variety of procedures for secure account administration across Pfizer globally.</span></dd>
						<dt class="title-large"><span>Help Desk Analyst (June 2004 to Feb 2005)</span></dt>
						<dd><span>Handled first level support issues for over 70,000 clients utilizing hundreds of applications.</span></dd>
						<dd><span>Dedicated subject matter expert in Ariba, Pfizer’s main procurement software.</span></dd>
					</dl>
					<h3>Toll Brothers, Inc.</h3>
					<dl>
						<dt class="title-large"><span>Technical Analyst (Sept 2002 – May 2004)</span></dt>
						<dd><span>Provided first and second tier support for a 3000+ user company running over 800 applications.</span></dd>
						<dd><span>Developed small VBA applications for users when necessary.</span></dd>
						<dd><span>Served as Administrator for Track-It! Ticket tracking software.</span></dd>
					</dl>
					<h3>University of Pittsburgh Residential Networking</h3>
					<dl>
						<dt class="title-large"><span>Residential Networking Consultant (August 2000 – April 2002)</span></dt>
						<dd><span>Maintained user connections in campus residence halls.</span></dd>
						<dd><span>Performed on-site support of all external and limited internal user equipment for campus residents.</span></dd>
					</dl>
					<h3>University of Pittsburgh Technology Help Desk </h3>
					<dl>
						<dt class="title-large"><span>Student Technical Analyst (May 2000 – August 2002)</span></dt>
						<dd><span>Provided phone support for University faculty, staff and students on all varieties of platforms, hardware & software.</span></dd>
						<dd><span>Assisted managerial staff in interviewing, assessing and hiring applicants.</span></dd>
					</dl>
					<h3>Federated Investors, Inc.</h3>
					<dl>
						<dt class="title-large"><span>Desktop/PDA Intern (Summer 2001)</span></dt>
						<dd><span>Developed project management schema for the Desktop/PDA group and implemented a tracking system in VBA.</span></dd>
						<dd><span>Wrote scripts using VBScript, WIL, and SMSInstaller to customize installations of external and internal applications and distributed them via SMS.</span></dd>
					</dl>
					<h3>Jenkens & Gilchrist, P.C. </h3>
					<dl>
						<dt class="title-large"><span>Applications Support Specialist/Intern (Summer 1999)</span></dt>
						<dd><span>Facilitated the migration of a US Top 40 law firm from Banyan to NT networking. </span></dd>
						<dd><span>Developed software to aid in the conversion. </span></dd>
					</dl>
				</div>
			</div></div>
			<div class="item w30 item-z-top"><div class="item-wrapper" data-show-footer="false" data-type="">
				<div class="item-text item-text-wrapper">
					<a target="_blank" href="files/KLR_Resume_2015.pdf">Get PDF version.<img alt="Resume" src="images/content/resume/resume.jpg"></a>
				</div>
			</div></div>
			<div class="item w40 resume-title text-center">
				<div class="title-relative">
					<div class="title-text">
						Résumé
					</div>
					<div class="title-text-shadow">
						Résumé
					</div>
				</div>
			</div>
			<div class="item w40"><div class="item-wrapper" data-show-footer="false" data-type="Activities">
				<div class="item-title"><h2>Activities</h2></div>
				<div class="item-text item-text-wrapper">
					<dl>
						<dt>New York Sharks Football (2011 - 2014)</dt>
							<dd>Director of Marketing (2012-2014)</dd>
						<dt>Coaching</dt>
							<dd>NFL Play60 Events (2012-2014)</dd>
							<dd>NYC PSAL Girls' Football Camps (2012-2014)</dd>
							<dd>Fins Up Foundation Girls' Football Camps (2012-2013)</dd>
						<dt>On The Spot Improv Troupe (2010 - 2012)</dt><dd class="empty"></dd>
						<dt>Outcast Improv Troupe (2010)</dt><dd class="empty"></dd>
						<dt>University of Pittsburgh Repertory Theater (2000-2002)</dt><dd class="empty"></dd>
						<dt>Kappa Delta Sorority (1998-2002)</dt>
							<dd>Executive Board Member, Panhellenic Representative</dd>
						<dt>University of Pittsburgh Women’s Lacrosse (1998-2000)</dt><dd class="empty"></dd>
					</dl>
				</div>
			</div></div>
		</div>


@stop