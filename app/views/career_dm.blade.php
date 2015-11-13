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
			Five Jack is looking for a Digital Marketer(Digital Marketing/Social Media).<br>
			<br>
			The Marketer will work for <a href="http://itemku.com">itemku</a> project which Five Jack mainly focussed on<br>
			and will be in charge in marketing team and progressing our marketing plan.<br>
			<br>
			Five Jack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>			
			As the product grows, we prefer someone who is eager to enhance their digital marketing experience and/or <br>
			learn about digital marketing and social media marketing.<br>
			<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			- Bachelor Degree in mathematics, statistics, business management or related field<br>
			- Fresh graduate welcome<br>	
			- GPA over 3.00 (Prefer over 3.50)<br>
			- Have passion in IT Industry and/or startup<br>
			- Have knowledge of the social media universe, particularly Facebook & Twitter<br>
			- Advanced in English both oral and written<br>
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			- Proficiency in SPSS, SAS or related statistics program<br>
			- Data-driven marketing and user experience improvements to improve traction and conversion<br>
			- 1+ years of experience in IT industry as a marketer<br>						
			- Outstanding interpersonal, written, and verbal communication skills<br>			
			- Great marketing copywriting and proofreading<br>
			- Must thrive in a dynamic, fast-paced environment, be a highly-motivated self-starter, flourish on a multi-cultural team, and have a brilliant sense of humor<br>
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