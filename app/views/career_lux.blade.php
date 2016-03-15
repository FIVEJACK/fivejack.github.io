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
		<h2 class="job-title">Lead UX Designer</h2>
		<p class="job-detail">
			Hello!
			<br><br>
			We are Five Jack. We have been developing and running "itemku", which is the first C2C marketplace for gamers in Indonesia. Our product has been growing very fast in 2015 which led one of top Venture Capital in Silicon Valley invest in our company. From that, we want to speed up our product development cycle to fulfill our customer's wants and needs.
			<br><br>
			To achieve that, we are looking for experienced UX Designer with a strong sense of ownership and a passion to create better product to our users. As part of the team, you will be given the chance to design, build, and improve/maintain our web service and front-end design.
			<br><br>
			<span class="sub-title">Qualifications</span><br>
			- Minimum 3 Year working experience as a UX Designer<br>
			- Bachelor Degree in Graphic Design or any related major<br>
			- Expert in working with HTML 5 & CSS 3<br>
			- Expert with using Adobe Photoshop & Illustrator<br>
			- Advanced in a/b test environment and Plenty knowledge on a/b test tools (optimizely, google experiments, etc)<br>
			- Advanced in marketplace or e-commerce UX<br>
			- Good interpersonal, written, and verbal communication skills in English<br>
			<br>
			<span class="sub-title">What is the benefit working in Five Jack?</span><br>
			- Salary Rp 8~10 million : The better you are, the better we can give<br>
			- Flexible working hour : Flexible creates higher responsibility<br>
			- Free lunch : You will never get hungry<br>
			- Monthly member voucher for our product : For every games you love to play<br>
			- 14 Days Annual Leaves : For every personal matters that you need to do<br>
			<br>
			<span class="sub-title">Contact</span><br>
			recruit@fivejack.com<br>
			<br>
			Please send us your amazing CV with your portfolio (it's a MANDATORY) to the e-mail address.<br>
			All documents must be in English<br>
			We also welcome any question regarding this recruitment.<br>
			<br>
		</p>
	</div>
@stop