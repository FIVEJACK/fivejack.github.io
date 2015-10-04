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
		<h2 class="job-title">Senior Customer Service Manager</h2>
		<p class="job-detail">
			<span class="sub-title">Job Description</span><br>
			Five Jack is looking for Senior Customer Service Manager.<br>
			This role will work for itemku project which Five Jack mainly focused on and will be in charge of ensuring the needs of users are being satisfied and maintaining the good and helpful relationship with the itemku users.<br>
			<br>
			FiveJack consists of international members(Indonesian, Korean)<br>
			who already have experiences from global companies.<br>
			<br>
			As the product growing, we prefer someone who has experienced in customer service field who can provide excellent customer service of our product, able to manage and develop a customer service policy and keep finding ways to measure customer satisfaction and improve services.<br>
			<br>
			<span class="sub-title">Qualifications</span><br>
			1. Bachelor Degree in any Major (Preferred Communication)<br>
			2. 2+ years customer service field experience<br>
			3. Experienced working in/with IT industry and/or e-commerce<br>
			4. Excellent in listening skills, understand exactly what customers require<br>
			5. Strong problem solving skill<br>
			6. Good in using Indonesian language, both oral and written, in accordance with EYD "Ejaan Yang Disempurnakan"<br>
			<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			1. Outstanding interpersonal, written, and verbal communication skills (Bahasa and English)<br>
			2. Able to Communicates courteously with customers by email, phone and/or face to face if needed<br>
			3. Be able to face and handle complains<br>
			4. Skills in analysis, planning, management of competing priorities to meet multiple deliverables and deadlines, creativity in seeking new and better solutions, and forward thinking<br>
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