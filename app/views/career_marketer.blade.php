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
		<h2 class="job-title">Digital Marketer</h2>
		<p class="job-detail">
			<span class="sub-title">Job Description</span><br>
			Five Jack is looking for Senior Marketer(Digital Marketing/Social Media).<br>
			The marketer will work for itemku project which Five Jack mainly focussed on and will be in charge in marketing team and progressing our marketing plan.<br>
			<br>
			FiveJack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>
			<br>
			As the product growing, we prefer someone who really wants to enhance his digital marketing experience and/or learn about digital marketing and social media marketing.
			<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			- Bachelors Degree in mathematics, statistics, business management or related field<br>
			- Fresh Graduate welcome<br>
			- GPA over 3.00 (Prefer over 3.50)<br>
			- Have passion in IT Industry and /or startup<br>
			- Have knowledge of the social media universe, particularly Facebook & Twitter.<br>
			- Advanced in English both oral and written<br>
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			- Skill of SPSS, SAS or related statistics program.<br>
			- Data-driven marketing and user experience improvements to improve traction and conversion.<br>
			- 1+ years of experience in IT industry as a marketer<br>
			- Outstanding interpersonal, written, and verbal communication skills<br>
			- Great marketing copywriting and proofreading<br>
			- Must thrive in a dynamic, fast-paced environment, be a highly-motivated self-starter, flourish on a multi-cultural team, and have a brilliant sense of humor<br>
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