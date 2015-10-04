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
		<h2 class="job-title">Senior Service Operator</h2>
		<p class="job-detail">
			<span class="sub-title">Job Description</span><br>
			Five Jack is looking for Senior Service Operator.<br>
			This role will work for itemku project which Five Jack mainly focused on and will be in charge of leading the service team to ensure all orders & transactions are processed with itemku payment system.<br>
			<br>
			FiveJack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>
			<br>
			As the product growing, we prefer someone who has ability to lead current service operation team.<br>
			This role also responsible to users and contents quality inside of itemku product and capable to research upcoming updates about game or game item.<br>
			This role will work together with customer service person to ensure all transactions are done and ensure customer satisfaction.<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			1. Bachelor Degree in any Major<br>
			2. 2+ year working experience in related field<br>
			3. Having passion in gaming, online shopping, and/or e-commerce industry<br>
			4. Excellent in listening skills and communication skill<br>
			5. Has experience in leading a team and have strong initiative mind<br>
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			1. Good interpersonal, written, and verbal communication skills (Bahasa)<br>
			2. Advance English Skill (both oral and written)<br>
			3. Good communication skill through phone<br>
			4. Good analytical thinking in providing solutions to problems of order product by email and phone<br>
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