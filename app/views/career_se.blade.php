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
			Hello!
			<br><br>
			We are Five Jack. We have been developing and running "itemku", which is the first C2C marketplace for gamers in Indonesia. Our product has been growing very fast in 2015 which led one of top Venture Capital in Silicon Valley invest in our company. From that, we want to speed up our product development cycle to fulfill our customer's wants and needs.
			<br><br>
			To achieve that, we are looking for Software Engineers with a strong sense of ownership and a passion to learn something new. As part of the team, you will be given the chance to design, build, improve, or maintain our web service and back-end system, which are based on open-source technology such as Laravel Framework and Elastic.
			<br><br>
			Successful candidates must also be innovative, flexible, self-directed, and able to design and write reliable, maintainable code. If you enjoy working in a dynamic environment and want the fun and feel of a start-up company, this may be the career opportunity for you!
			<br><br>
			<span class="sub-title">Qualifications</span><br>
			- Excellent understanding of Object-Oriented design and concepts, design patterns, and algorithms<br>
			- Fluency in at least one programming language<br>
			- S1 degree in Computer Science or equivalent from a reputable university(GPA has to be higher than 3.0)<br>
			- Good interpersonal, written, and verbal communication skills in English<br>
			<br>
			<span class="sub-title">Preferred Qualifications</span><br>
			- Experience programming in an open source environment<br>
			- Experience programming in PHP and its MVC framework<br>
			- Good understanding of SQL and database<br>
			<br>
			<span class="sub-title">What is the benefit working in Five Jack?</span><br>
			- Salary Rp 5~8 million : The better you are, the better we can give<br>
			- Flexible working hour : Flexible creates higher responsibility<br>
			- Free lunch : You will never get hungry<br>
			- Monthly member voucher for our product : For every games you love to play<br>
			- 14 Days Annual Leaves : For every personal matters that you need to do<br>
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