@extends('template.header_footer')

@section('title')
Five Jack - Gamer's Heaven
@stop

@section('meta_tag')
<meta name="description" content="Fivejack, a startup company in game related products. Fivejack has committed to be the best service platform for gamer. Itemku is the pioneer platform in Indonesia to supply information about price of game item and game money">
@stop

@section('css_import')
@parent
<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href='{{{ Config::get("constant.RESOURCE_URL") . "css/home.css" }}}'>
@stop

@section('contents')
<div class="wallpaper">
	
	<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/IMG_8387-offset-small.jpg" }}}' alt="fivejack team" align="center" class="wallpaper-image">

	<div class="uvp-container">
		<p class="uvpspace">We Make	Gamer's Heaven</p>
	</div>

	<div class="company-explained">
		<p id="company_explained">Five Jack established in 2013, is a start-up company in gaming related products and value added service. In 2014, Fivejack comes with new business strategy that can change the behavior of gamers in Indonesia and Fivejack is committed to build better game service platform.</p>
	</div>
</div>

<div class="container-BG">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/BG_kiri.png" }}}' class="BG">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/BG_kanan.png" }}}' class="BG">
</div>

<p class="fivejack-culture-title">Five Jack Culture</p>

<div class="fivejack-culture">
	<div class="culture-agile">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/agile.png" }}}' alt="agile">
		<p class="culture-font">Agile</p>
	</div>
	<div class="culture-hardcore">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/hardcore-gamer.png" }}}' alt="hardcore gamer">
		<p class="culture-font">Hardcore Gamers</p>
	</div>
	<div class="culture-data">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/data-driven.png" }}}' alt="data driven" > 
		<p class="culture-font">Data Driven</p>
	</div>
</div>

<div class="space"></div>

<div class="product-page">
	<div class="itemku">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/itemku logo.png" }}}' alt="itemku logo" class="itemku-logo">
		<p class="itemku-description">itemku hadir menjadi <span class="situs-jualbeli">situs jual-beli</span> terbesar dalam komunitas game online di Indonesia dan mempunyai layanan “itemku Safe Trading” yang menjamin 100% keamanan bertransaksi. Tidak hanya keamanan bertransaksi yang diperoleh pembeli dan penjual online, tetapi juga kemudahan bertransaksi karena praktis untuk digunakan.</p>

		<div class="space"></div>
		<span class="reviewed-by">Reviewed by:</span>
	</div>
	<div class="itemku-preview-container">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/itemku preview.png" }}}' alt="itemku preview" class="itemku-preview">
	</div>
</div>

<br>

<div class="container-reviews">
	<div class="review-content-outter-container">
		<div class="review-content-container">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/TIA.jpg" }}}' alt="TIA" class="review-image">
			<p class="review-text">itemku: marketplace Gold dan Item game online di Indonesia</p>
		</div>

		<div class="review-content-container-2">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/daily social.png" }}}' alt="Daily Social" class="review-image-2">
			<p class="review-text-2">itemku Fokus Menjadi Marketplace dan Situs Pembanding Harga untuk “Game Item” dan “Game Money”</p>
		</div>
	</div>
</div>

<div class="space"></div>

<div class="career">
	<div class="career-container">
		<div class="roles-container">
			<p class="roles">Software Engineer</p>
			<p class="roles">Junior UX Designer</p>
			<p class="roles">Senior UX Designer</p>
			<p class="roles">itemku Expert</p>
			<p class="roles">Content Creator</p>
			<p class="roles">Senior Digital Marketer</p>
			<p class="roles">Global Game Researcher</p>
			<p class="roles">Finance</p>
			<p class="roles">Service Operator</p>
			<p class="roles">Customer Service</p>
		</div>
	
		<div class="software-engineer">
			<p class="software-description">We are looking for Software Engineer with a strong sense of ownership and a passion to learn something new. As part of the team, you will be given the chance to design, build, improve, or maintain our web service and back-end system, which are based on open-source technology such as Laravel Framework and Elastic. Successful candidates must also be innovative, flexible, self-directed, and able to design and write reliable, maintainable code.</p>
			<br>
			<p class="qualifications-software">Qualifications</p>
				<ul>
					<li class="qualifications-software-li">Excellent understanding of Object-Oriented design and concepts, design patterns, and algorithms.</li>
					<li class="qualifications-software-li">Fluency in at least one programming language.</li>
					<li class="qualifications-software-li">S1 degree in Computer Science or equivalent from a reputable university(GPA has to be higher than 3.0).</li>
					<li class="qualifications-software-li">Good interpersonal, written, and verbal communication skills in English.</li>
				</ul>
			<br>
			<p class="qualifications-software">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-software-li">Experience programming in an open source environment.</li>
					<li class="qualifications-software-li">Experience programming in PHP and its MVC framework.</li>
					<li class="qualifications-software-li">Good understanding of SQL and database.</li>
					<li class="qualifications-software-li">Good understanding of Microservice Architecture or Service-oriented Architecture (SOA).</li>
				</ul>
		</div>
	</div>
	<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/orang.png" }}}' alt="itemku mascot" class="mascot">
</div>

<div class="container-BG">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/BG_kiri.png" }}}' class="BG">
		<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/BG_kanan.png" }}}' class="BG">
</div>

<div class="space"></div>

<p class="what">What is it like to work in Five Jack ?</p>

<div class="icons">
	<div class="icons-container">
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/time.png" }}}' class="icons-img">
			<p class="icons-text">Flexible working hour:<br>Flexible creates higher responsibility</p>
		</div>
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/food.png" }}}' class="icons-img">
			<p class="icons-text">Free lunch:<br>You will never get hungry</p>
		</div>
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/voucher.png" }}}' class="icons-img">
			<p class="icons-text">Monthly itemku member voucher: For every game you love to play</p>
		</div>
	</div>
	<div class="icons-container">
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/calendar.png" }}}' class="icons-img">
			<p class="icons-text">14 Days Annual Leaves:<br>For every personal matter that you need to do</p>
		</div>
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/agile-dev.png" }}}' class="icons-img">
			<p class="icons-text">Agile development lifecycle</p>
		</div>
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/fun.png" }}}' class="icons-img">
			<p class="icons-text">Surrounded by smart, fun, and very tactical gamers</p>
		</div>
	</div>
	<div class="icons-container">
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/challenge.png" }}}' class="icons-img">
			<p class="icons-text">Everyday is a new challenge</p>
		</div>
		<div class="icons-row">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/family.png" }}}' class="icons-img">
			<p class="icons-text">A company that you can tell is family at the same time</p>
		</div>
	</div>


</div>

<div class="contact">

</div>





<div class="space"></div>
@stop