<?php
/**
* Template Name: Resume
*/

?>

<style>
.clearfix:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
	}
* html .clearfix             { zoom: 1; } /* IE6 */
*:first-child+html .clearfix { zoom: 1; } /* IE7 */
body {
	font-size: 18px;
	margin: 0px;
}

#personal_info {
	margin-bottom: 25px;
	text-align: center;
}

#personal_info img {
	border-radius: 50%;
	width: 256px;
	height: 256px;
}

#personal_info h1 {
	font-size: 48px;
	margin: 0px;
}

#answers {
	width: 100%;
	background-color: #136AD5;
}

#answers:after {
	clear: both;
}

#charter1 .wrap {
	width: 512px;
	float: left;
}
#answers .logo, #charter1 .logo, #charter2 .logo, #federalreserve .logo {
	float: left;
	width: 512px;
}

#answers .info, #charter1 .info, #charter2 .info, #federalreserve .info {
	background-color: #fff;
	float: left;
	padding: 15px;
	width: 600px;
}

#personal_info .info {
	background-color: #fff;
	padding: 15px;
	text-align: left;
}

#personal_info .name {
	float: left;
	width: 50%;
}

#personal_info .navigation {
	float: left;
	width: 50%;
	padding-top: 15px;
	font-size: 24px;
	color: #f1f1f1;
	text-align: right;
}

#personal_info .navigation a {
	text-decoration: none;
	color: #f1f1f1;
}

#answers li, #charter1 li, #charter2 li, #federalreserve li {
	margin-bottom: 10px;
}

#charter1, #charter2 {
	background-color: #015A84;
}

#federalreserve {
	background-color:#fff;
}

#federalreserve img {
	width: 500px;
}

#experience .header, #certification .header, #skills .header, #personal_info .header {
	text-align: left;
	background-color: #a9a9a9;
	color: #FFF;
	padding: 10px;
	font-size: 48px;
}

#skills img {
	width: 256px;
}
</style>

<div id="personal_info">
	<div class="header clearfix">
		<div class="name">
			<h1>Michael Clubb</h1>
		</div>
		<div class="navigation">
			<a href="#about_me">About Me</a> | 	
			<a href="#experience">Experience</a> | 	
			<a href="#certification">Certifications</a> | 	
			<a href="#skills">Skills</a> | 	
			<a href="#contact">Contact Me</a>	
		</div>
	</div>
		<img src="<?php echo get_template_directory_uri();?>/images/resume/mike_tough_mudder.jpg">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/mike_fed.jpg">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/mike_run.jpg">
		<div id="about_me" class="header clearfix"><span>About Me</span></div>
		<div class="info">
		<p> I started programming right out of highschool back in 1998. It started out as really some rough static html pages. Mostly geo-city type pages. Now I know that some of you might not know what that even means. Be thankful for that! Shortly after that, I deceided to pickup server side programming. I had two options to choose from at the time and that was either asp classic (agian some of you might not know what that is) or php. Since I am partial to linux/unix, I choose to go with PHP. I still at some point learned asp classic but that is another story. In order for me to learn these skills, I genrally gave myself a project to mock and see if I could provide the same or better functionality. I found this to be the best way to learn as it gave me really world experience even though it was just for myself. I created things like yahoo's filemanager, BBPHP forums, a site similar to DSL Reports. Eventually, I got to program for a living, so in order for me to learn more, I branched out. I started learning C/C++ and joined in the world of homebrew games. I wrote several tetris clones for Sony PSP, PSP Vita, Nintendo Gameboy Advanced, Nintendo DS, Nintendo Wii, Microsoft XNA. When mobile phones became smart phones, I jumped in and spent some time learning iOS and android development. I had an iPhone Fantasy Cricket App on the app store for a while as well as wrote a game for android for a client. As you can tell, I like to learn all things programming. Any chance I get to learn, I take full advantage!</p>
		</div>
</div>

<div id="experience" class="clearfix">
	<div class="header clearfix"><span>Experience</span></div>
	<div id="answers" class="clearfix">
		<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/resume/answers.png"></div>
		<div class="info">
			<span class="title"><h1>Senior Software Engineer</h1></span>
			<span class="date"><h2>May 2015 - Present</h2></span>
			<ul>
				<li>Responsible for design, develop and support of high traffic services.</li>
				<li>Work with product and engineering management
					<ul>
						<li>business requirements</li>
						<li>QA benchmarks</li>
					</ul>
				</li>
				<li>Contribute to the architecture 
					<ul>
						<li> new / existing products</li>
						<li>services</li>
						<li>databases</li>  
					</ul>
				</li>
				<li>Creating comprehensive, technical and high-level documentation.</li>
  				<li>Evaluating and analyzing development and operations tools that contributes to fast development and high availability of production systems.</li>
			</ul>

		</div>
	</div>

	<div id="charter2" class="clearfix">
		<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/resume/charter.jpg"></div>
		<div class="info">
			<span class="title"><h1>Senior Software Developer</h1></span>
			<span class="date"><h2>August 2014 - May 2015</h2></span>
			<ul>
				<li>Codes, tests, and debugs new software or makes enhancements to existing software</li>
				<li>Designs and writes programs according to functional and non-functional requirements</li>
				<li>Develops technical documentation</li>
				<li>Collaborates with technical staff to learn and understand software problems</li>
				<li>Provides general system users and management with system analysis and feedback</li>
				<li>Influences system design by identifying and recommending design and requirements needs for software enhancements</li>
				<li>Mentors and coaches less experienced staff</li>
				<li>Maximizes the efficiency of the various software systems by implementing, monitoring, testing and auditing new software programs</li>
				<li>Analyzes and resolves computer related problems by coordinating with in-house personnel to diagnose and fix operational issue, as well as consulting, advising and training on specialized features and functions</li>

			</ul>

		</div>
	</div>

	<div id="federalreserve" class="clearfix">
		<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/resume/federal_reserve_bank.png"></div>
		<div class="info">
			<span class="title"><h1>Web  Developer</h1></span>
			<span class="date"><h2>June 2012 - August 2014</h2></span>
			<ul>
				<li>Provide day-to-day support of existing code (Cold Fusion, PHP, .Net)</li>
				<li>Develop vb scripts for automation of tasks</li>
				<li>Developed and maintain the Content Development System (Desktop application C# Winform)</li>
				<li>Migrating current Cold Fusion sites to .Net</li>
				<li>Develop .Net code to support the ECP Modernization project as a team</li>
				<li>Provide security assessments of code since being trained for the CEH exam</li>
				<li>Prototyping mobile applications for Android and iOS using the native SDKs</li>

			</ul>

		</div>
	</div>

	<div id="charter1" class="clearfix">
		<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/resume/charter.jpg"></div>
		<div class="wrap">
		<div class="info">
			<span class="title"><h1>Software Developer II</h1></span>
			<span class="date"><h2>Feb 2011 - June 2012</h2></span>
			<ul>
				<li>Provide day-to-day support of existing webservices
				<li>Develop PERL/PHP scripts for automation of tasks
				<li>Develop new requested methods to extend webservices
				<li>Migrating current webservice to new platform/software stack
			</ul>
		</div>

		<div class="info">
			<span class="title"><h1>Network Engineer II</h1></span>
			<span class="date"><h2>December 2008 - Feb 2011</h2></span>
			<ul>
				<li>Provide day-to-day support of existing BACC applications
				<li>Developed PERL/PHP scripts for automation of tasks
				<li>Developed and implemented an upgrade process for the warehouses
				<li>Provide support for the CNR/DPE clusters
				<li>Provide support on Solaris and Linux servers.
			</ul>
		</div>

		<div class="info">
			<span class="title"><h1>Systems Engineer I</h1></span>
			<span class="date"><h2>June 2007 - December 2008</h2></span>
			<ul>
				<li>Provide day-to-day support of existing EMS applications
				<li>Developed PERL scripts for automation of tasks
				<li>Developed and implemented a Docsis Reporting Utilization and Measuring application for the Enterprise
				<li>Provide support for DRUM and its 50+ Redhat servers
				<li>Provide support on 85+ Solaris and Linux servers.
			</ul>
		</div>

		<div class="info">
			<span class="title"><h1>Metrics Specialist</h1></span>
			<span class="date"><h2>May 2005 - June 2007</h2></span>
			<ul>
				<li>Perform on-going analysis of operational performance metrics
				<li>Provide day-to-day support of existing reporting applications
				<li>Compile, analyze and interpret daily, weekly and monthly reports to identify operational areas of strength and needed improvement
			</ul>
		</div>

		<div class="info">
			<span class="title"><h1>Reports Specialist</h1></span>
			<span class="date"><h2>March 2004 - May 2005</h2></span>
			<ul>
				<li>Provided day-to-day support of existing reporting applications
				<li>Provided support for ASP.net applications
				<li>Developed sales and commission reports 
			</ul>
		</div>

		<div class="info">
			<span class="title"><h1>Charter Business Tech Support</h1></span>
			<span class="date"><h2>August 2003 - March 2004</h2></span>
			<ul>
				<li>Provided technical and billing assistance for business customers
				<li>Diagnosed internet related problems with customers; escalated problems to field techs when appropriate
				<li>Designed, developed and implemented a ticket tracking system using PHP and MySQL
			</ul>
		</div>

		<div class="info">
		HSI Tech I and II   (8/2002 – 8/2003)
			<span class="title"><h1>HSI Tech I and II</h1></span>
			<span class="date"><h2>August 2002 - August 2003</h2></span>
			<ul>
				<li>Responded to customer inquiries regarding products and services
				<li>Resolved product or service issues by clarifying the customer’s complaint and determining the cause of the problem
				<li>Diagnosed internet related problems and recommends solutions
				<li>Designed, developed and implemented an escalation and sales application using PHP and MySQL
			</ul>
		</div>
		</div>
	</div>
</div>

<div id="certification">
	<div class="header clearfix"><span>Certifications</span></div>
	<div id="ceh"><img src="<?php echo get_template_directory_uri();?>/images/resume/ceh.gif"></div>
</div>

<div id="skills">
	<div class="header clearfix"><span>Skills</span></div>
	<div id="info">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/php.jpg">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/mysql.png">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/js.png">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/css_html.svg">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/ios.png">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/android.jpg">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/perl.jpg">
		<img src="<?php echo get_template_directory_uri();?>/images/resume/java.png">
	</div>
</div>
