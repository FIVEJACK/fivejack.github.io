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
		<h2 class="job-title">Advertising Graphic Designer</h2>
		<p class="job-detail">
			<span class="sub-title">Job Description</span><br>
			Five Jack is looking for an Advertising Graphic Designer.<br>
			(Specially Online Advertising to Facebook, Google, and so on).<br>
			<br>
			The advertising graphic designer have to make a creative design strategy & ideas to reach target audience / goals.<br>
			<br>
			The Designer will work for <a href="http://itemku.com">itemku</a> project which Five Jack mainly focused on<br>
			and will be in charge of advertising design which includes the overall creative graphic design and creative problem-solving in making the advertising.<br>
			<br>
			Five Jack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>			
			As a startup company, we prefer someone who is eager to learn something new.<br>
			<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			- Strong in concept, innovative design ideas, good design sense<br>
			- Proficiency in graphic design software such as Adobe Photoshop & Adobe Illustrator<br>
			- Skill of video editing software for make advertising video<br>
			- Excellent communication skill with marketers
			- Bachelor degree in graphic design, or advertising<br>
			- GPA over 3.00<br>
			- Fresh graduate welcome<br>						
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			- Strong portfolio related to online advertising design<br>
			- 1+ years of experience in advertising industry as a designer<br>
			- Intermediate English skill to work with foreigners<br>
			- Basic understanding on game/e-commerce business<br>
			- Have some knowledge in digital ads banner and social media banner<br>
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