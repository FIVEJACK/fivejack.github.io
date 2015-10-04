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
		<h2 class="job-title">UX Designer(Web Designer)</h2>
		<p class="job-detail">
			<span class="sub-title">Job Description</span><br>
			Five Jack is looking for an UX Designer who also can prototype(in HTML, CSS and JS).<br>
			The designer will work for the Itemku.com project which FiveJack mainly focused on<br>
			and will be in charge of creating customer-focused designs that meet business requirements.<br>
			<br>
			FiveJack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>
			As a startup company, we prefer someone who has eager to learn something new.<br>
			<br>
			<i>Therefore, although we have several required skills for this position,<br>
			if you are highly motivated to be an expert of UX/Web Designing and have passion to learn, <br>
			please contact us regardless of the requirements.</i><br>
			<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			- Bachelor's degree in computer science, design, human-computer interaction (HCI), or equivalent study<br>
			- Excellent communication, and interpersonal skills<br>
			- Must be able to work with foreigners(intermediate English skill is required)<br>					
			- Must be fluent in Bahasa Indonesia<br>
			- Self motivated to study new trend and theory about UX and apply it in real work<br>
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			- Proficiency in design tools(Photoshop, etc)<br>
			- Ability to prototype in HTML, JavaScript, and CSS<br>
			- Fluency in best practices for web-based information architecture<br>
			- Knowledge of usability principles and techniques<br>
			- Familiarity with the technical considerations needed when designing for the web<br>			
			- Basic understanding of game/e-commerce business<br>
			<br>
			<br>
			<span class="sub-title">Contact</span><br>
			recruit@fivejack.com<br>
			<br>
			Please send us your CV with a cover letter to the e-mail address.<br>
			We also receive any question regarding this recruit.<br>
			<br>
		</p>
	</div>
@stop