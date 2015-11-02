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
			Five Jack is looking for an Advertising Graphic Designer(Specially Online Advertising to Facebook, Google and so on).<br>
			The Designer will work for itemku project which Five Jack mainly focused on and will be in charge of advertising design is included in the overall creative graphic design and creative problem-solving in making the advertising.<br>
			The advertising graphic designer have to make a creative design strategy & ideas to reach target audience / goals.<br>
			<br>
			FiveJack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>
			As a startup company, we prefer someone who has eager to learn something new.<br>
			<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			- Strong in concept, innovative design ideas, good design sense<br>
			- Skill of graphic design software such as Adobe Photoshop & Adobe Illustrator<br>
			- Skill of video editing software for make advertising video<br>
			- Excellent communication skill with marketers<br>
			- Bachelor degree in graphic design, or advertising<br>
			- GPA over 3.00<br>
			- Fresh graduate welcome<br>
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			- Strong portfolio related online advertising design<br>
			- 1+ years of experience in advertising industry as a designer<br>
			- Intermediate English skill to work with foreigners<br>
			- Basic understanding on game/e-commerce business<br>
			- Have some knowledge for digital ads banner and social media banner<br>
			<br>
			<br>
			<span class="sub-title">Contact</span><br>
			recruit@fivejack.com<br>
			<br>
			Please send your CV, cover letter and portfolio to recruit@fivejack.com. All documents must be in English.<br>
			<br>
		</p>
	</div>
@stop