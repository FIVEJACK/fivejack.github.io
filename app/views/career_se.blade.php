@extends('template.header_footer')

@section('title')
Career - FiveJack
@stop

@section('meta_tag')
@stop

@section('css_import')
@parent
<link rel="stylesheet" type="text/css" href='{{{ Config::get("constant.RESOURCE_URL") . "css/career.css" }}}'>
@stop

@section('contents')
	<div class="content">
		<h2 class="job-title">Software Engineer</h2>
		<p class="job-detail">
			<span class="sub-title">Job Description</span><br>
			Five Jack is looking for a Software Engineer.<br>
			<br>
			The engineer will work for <a href="http://itemku.com">itemku</a> project which Five Jack mainly focused on<br>
			and will be in charge of creating high performance, stable, and secure e-commerce platform that meet our business requirements.<br>
			<br>
			Five Jack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>			
			As a startup company, we prefer someone who is eager to learn something new.<br>
			<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			- Bachelor degree in computer science, or equivalent study<br>
			- Solid understanding on computer science fundamentals<br>
			- Fresh graduate welcome<br>
			- GPA over 3.00<br>
			- Proficiency in at least one programming language<br>
			- Familiarity with SQL<br>
			- Intermediate English skill to work with foreigners<br>	
			- Like to learn new tech trends<br>							
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			- Master degree in computer science, or equivalent study<br>
			- Familiarity with programming in PHP and its MVC framework<br>
			- 1+ years of experience in software development industry as a programmer<br>						
			- Good interpersonal, written, and verbal communication skills<br>			
			- Basic understanding on game/e-commerce business<br>
			<br>
			<br>
			<span class="sub-title">Contact</span><br>
			recruit@fivejack.com<br>
			<br>
			Please send us your amazing CV with great cover letter to the e-mail address.<br>
			All documents must be in English<br>
			We also welcome any question regarding this recruitment.<br>
			<br>
		</p>
	</div>
@stop