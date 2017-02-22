@extends('template.header_footer')

@section('title')
Five Jack - Gamer's Heaven
@stop

@section('meta_tag')
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name="description" content="Fivejack, a startup company in game related products. Fivejack has committed to be the best service platform for gamer. Itemku is the pioneer platform in Indonesia to supply information about price of game item and game money">
@stop

@section('css_import')
@parent
<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href='{{{ Config::get("constant.RESOURCE_URL") . "css/home.css" }}}'>
@stop

@section('js')
@parent
<script type='text/javascript' src='{{ Config::get('constant.RESOURCE_URL') . 'packages/viewport.js' }}' charset='utf-8'></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPFdndwq9kQ_QhBiBFtrAgDnVRk2rX6OI&callback=initMap"></script>
<script type="text/javascript">
function initMap() {
	var mapPosition = {lat: -6.183977, lng: 106.803069};
	var infowindow = new google.maps.InfoWindow({
          content: '<div id="content">'+
						'<h1 id="firstHeading" class="firstHeading">Five Jack</h1>'+
						'<div id="bodyContent">'+
							'Kel Kota Bambu Utara, Kecamatan Palmerah, <br/>'+
							'Jl. Kamboja Raya no 15 B, <br/>'+
							'Jakarta Barat, 11420</p>'+
						'</div>'+
					'</div>'
        });

	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 15,
	  center: mapPosition
	});
	
	var marker = new google.maps.Marker({
	  position: mapPosition,
	  map: map,
      title: 'Fivejack'
	});	
	marker.addListener('click', function() {
	  infowindow.open(map, marker);
	});
}

function showJob(jobName)
{
	$('.job-content').hide();
	$('.roles-active').removeClass('roles-active');
	$('#' + jobName).show();
	$('#' + jobName + '_menu').addClass('roles-active');
}
	
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({ 'scrollTop': $target.offset().top }, 1000, 'swing', function () { window.location.hash = target; });
	});
		
	$(window).bind("scroll", function(event) {		
        $("section:in-viewport").each(function() {
			$('.menu-link-active').removeClass('menu-link-active');
			sectionId = $(this).attr("id");
			$("#menu_" + sectionId).addClass('menu-link-active');		  
        });		
    });
	
});

</script>
@stop

@section('contents')

<section id="home">
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
			<p class="culture-font-agile">Agile</p>
		</div>
		<div class="culture-hardcore">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/hardcore-gamer.png" }}}' alt="hardcore gamer">
			<p class="culture-font-hardcore">Hardcore Gamers</p>
		</div>
		<div class="culture-data">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/data-driven.png" }}}' alt="data driven" > 
			<p class="culture-font-data">Data Driven</p>
		</div>
	</div>
</section>


<section id="product">
<div class="space"></div>
	<div class="product-page">
		<div class="itemku">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/itemku logo.png" }}}' alt="itemku logo" class="itemku-logo">
			<p class="itemku-description">itemku is the biggest <span class="situs-jualbeli">marketplace</span> in the Indonesian online game community and has the <span style="font-style: italic; font-weight: bold">"itemku Safe Trading"</span> service which guarantees 100% safe trading. In itemku, <span style="font-style: italic; font-weight: bold">safe trading</span> is not the only thing that our buyers and sellers have, but they also have the <span style="font-style: italic; font-weight: bold">easiness</span> and <span style="font-style: italic; font-weight: bold">convenience</span> when doing their transactions.</p>

			<div class="space"></div>
		</div>
		<div class="itemku-preview-container">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/itemku preview.png" }}}' alt="itemku preview" class="itemku-preview">
		</div>
	</div>

	<div><p class="reviewed-by">Reviewed by:</p></div>
	
	<div class="container-reviews">
		<div class="review-content-outter-container">
			<div class="review-content-container">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/TIA.jpg" }}}' alt="TIA" class="review-image">
				<a href="https://id.techinasia.com/itemku-marketplace-emitemem-dan-uang-game-online-di-indonesia" target="_blank" class="review-text">itemku: marketplace Gold dan Item game online di Indonesia</a>
			</div>

			<div class="review-content-container-2">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/daily social.png" }}}' alt="Daily Social" class="review-image-2">
				<a href="https://dailysocial.net/post/itemku-marketplace-game-item-game-money" target="_blank" class="review-text">itemku Fokus Menjadi Marketplace dan Situs Pembanding Harga untuk “Game Item” dan “Game Money”</a>
			</div>
		</div>
	</div>
	
</section>

<section id="career">
<div class="career">
<div class="space"></div>
<p class="what">Hiring Now</p>
	<div class="career-container">
		<div class="roles-container">
			<p class="roles" id="se_menu" onclick="showJob('se')">Software Engineer</p>
			<p class="roles" id="jux_menu" onclick="showJob('jux')">Junior UX Designer</p>
			<p class="roles" id="sux_menu" onclick="showJob('sux')">Senior UX Designer</p>
			<p class="roles" id="ie_menu" onclick="showJob('ie')">itemku Expert</p>
			<p class="roles" id="cc_menu" onclick="showJob('cc')">Content Creator</p>
			<p class="roles" id="sdm_menu" onclick="showJob('sdm')">Senior Digital Marketer</p>
			<p class="roles" id="ggr_menu" onclick="showJob('ggr')">Global Game Researcher</p>
			<p class="roles" id="finance_menu" onclick="showJob('finance')">Finance</p>
			<p class="roles" id="cs_menu" onclick="showJob('cs')">Customer Service</p>
		</div>
	
		<div class="software-engineer job-content" id="se">
			<p class="software-description">We are looking for Software Engineer with a strong sense of ownership and a passion to learn something new. As part of the team, you will be given the chance to design, build, improve, or maintain our web service and back-end system, which are based on open-source technology such as Laravel Framework and Elastic. Successful candidates must also be innovative, flexible, self-directed, and able to design and write reliable, maintainable code.</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Excellent understanding of Object-Oriented design and concepts, design patterns, and algorithms.</li>
					<li class="qualifications-li">Fluency in at least one programming language.</li>
					<li class="qualifications-li">S1 degree in Computer Science or equivalent from a reputable university (GPA has to be higher than 3.0).</li>
					<li class="qualifications-li">Good interpersonal, written, and verbal communication skills in English.</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">Experience programming in an open source environment.</li>
					<li class="qualifications-li">Experience programming in PHP and its MVC framework.</li>
					<li class="qualifications-li">Good understanding of SQL and database.</li>
					<li class="qualifications-li">Good understanding of Microservice Architecture or Service-oriented Architecture (SOA).</li>
				</ul>
		</div>
		
		<div class="software-engineer job-content" id="jux" style="display: none">
			<p class="software-description">We are looking for experienced UX Designer with a strong sense of ownership and a passion to create better product to our users. As part of the team, you will be given the chance to design, build, and improve/maintain our web service and front-end design.</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Minimum 1 Year working experience as a UX Designer.</li>
					<li class="qualifications-li">Bachelor Degree in Graphic Design or any major related</li>
					<li class="qualifications-li">Good interpersonal, written, and verbal communication skills in English.</li>
					<li class="qualifications-li">Advanced with using Adobe Photoshop and Illustrator.</li>
					<li class="qualifications-li">Prototyping skills and basic working knowledge of HTML5/CSS3.</li>
					<li class="qualifications-li">Ability to develop using HTML5/CSS3.</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">Have knowledge in a/b test environment.</li>
				</ul>
		</div>

		<div class="software-engineer job-content" id="sux" style="display: none">
			<p class="software-description">We are looking for experienced UX Designer with a strong sense of ownership and a passion to create better product to our users. As part of the team, you will be given the chance to lead, design, build, and improve/maintain our web service and front-end design.</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Minimum 1 Year working experience as a UX Designer.</li>
					<li class="qualifications-li">Bachelor Degree in Graphic Design or any major related</li>
					<li class="qualifications-li">Good interpersonal, written, and verbal communication skills in English.</li>
					<li class="qualifications-li">Advanced with using Adobe Photoshop and Illustrator.</li>
					<li class="qualifications-li">Prototyping skills and basic working knowledge of HTML5/CSS3.</li>
					<li class="qualifications-li">Ability to develop using HTML5/CSS3.</li>
				</ul>
		</div>

		<div class="software-engineer job-content" id="ie" style="display: none">
			<p class="software-description">We are looking for itemku Expert. This role is will be in charge of our community, planning a strategical contents marketing to distribute to our users in various social networking service channels and the most important being the expertise for our users (buyer and seller side).</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Bachelor degree in Communication, PR, Business management or related field.</li>
					<li class="qualifications-li">GPA over 3.00</li>
					<li class="qualifications-li">At least 2 years working experiences.</li>
					<li class="qualifications-li">Advanced in English both oral and written.</li>
					<li class="qualifications-li">Have experience in editorial and blog management.</li>
					<li class="qualifications-li">Have excellent communication.</li>
					<li class="qualifications-li">Have knowledge of game industry also e-commerce industry to understand gamers and connect the dots for e-commerce. and of course enjoy playing games as well.</li>
					<li class="qualifications-li">Have knowledge and experience of building brand and community exposure through product's blog/social media.</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">Smart hardcore gamer.</li>
					<li class="qualifications-li">Advanced in contents marketing. Community Management, Social media management and blog management, etc.</li>
					<li class="qualifications-li">Have portfolio in manage and building exposure of the product or brand.</li>
					<li class="qualifications-li">Must thrive in a dynamic, fast-paced environment, be a highly-motivated self-starter, flourish on a multi-cultural team, and have a brilliant sense of humor.</li>
				</ul>
		</div>

		<div class="software-engineer job-content" id="cc" style="display: none">
			<p class="software-description">We are looking for itemku Expert. This role is will be in charge of our community, planning a strategical contents marketing to distribute to our users in various social networking service channels and the most important being the expertise for our users (buyer and seller side).</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Bachelor degree in Journalist, Visual Communication Design, or related field - GPA over 3.00 - Advanced in English both oral and written.</li>
					<li class="qualifications-li">At least 2 years work experiences.</li>
					<li class="qualifications-li">Have good writing skills.</li>
					<li class="qualifications-li">Have knowledge of game industry to understand gamers and of course play games as well.</li>
					<li class="qualifications-li">Have knowledge and experience of building brand and community exposure through product's blog/social media.</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">Smart hardcore gamer.</li>
					<li class="qualifications-li">Have portfolio in writing for games industry (game's articles or blogs).</li>
					<li class="qualifications-li">Have experience in industrial Graphic design.</li>
					<li class="qualifications-li">Must thrive in a dynamic, fast-paced environment, be a highly-motivated self-starter, flourish on a multi-cultural team, and have a brilliant sense of humor.</li>
				</ul>
		</div>

		<div class="software-engineer job-content" id="sdm" style="display: none">
			<p class="software-description">We are looking for Senior Digital Marketer. This role will be in charge of delivery our campaign and monitor our data for making decision. Successful candidates must be able to manage and delivery information and needs for game market in Indonesia and other countries..</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Bachelor degree or Master degree in mathematics, statistics, business management or related field.</li>
					<li class="qualifications-li">GPA over 3.00.</li>
					<li class="qualifications-li">Advanced in English both oral and written.</li>
					<li class="qualifications-li">Minimum 2 years online marketing field experience in/with IT industry and/or e-commerce.</li>
					<li class="qualifications-li">Have knowledge of game industry to understand gamers.</li>
					<li class="qualifications-li">Have knowledge of Facebook Ads / GSN / GDN / SEO.</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">Data-driven marketing and user experience improvements to improve traction and conversion.</li>
					<li class="qualifications-li">Must thrive in a dynamic, fast-paced environment, be a highly-motivated self-starter, flourish on a multi-cultural team, and have a brilliant sense of humor.</li>
				</ul>
		</div>

		<div class="software-engineer job-content" id="ggr" style="display: none">
			<p class="software-description">We are looking for Global Game Researcher. This role will be in charge to research global game that have a market value of real money trading either in Indonesia or overseas. Successful candidates must able to find a game that have high RMT (Real Money Trading) transactions, research how the practice of RMT for each global game and how it can be applied to itemku users. The research itself are planed by yourself and your target is we can open more and more variety RMT game for our users.</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Bachelors Degree in mathematics, statistics, business management or related field.</li>
					<li class="qualifications-li">Fresh graduate are welcome.</li>
					<li class="qualifications-li">GPA over 3.00 (Prefer over 3.50).</li>
					<li class="qualifications-li">Play any kinds of game (Mobile game, PC Online game and Console game) and can differentiate which one are the best for RMT.</li>
					<li class="qualifications-li">English skill (Oral and Written) is needed.</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">Smart hardcore gamer.</li>
					<li class="qualifications-li">Have a great experience in RMT.</li>
					<li class="qualifications-li">Smart in use google or other search engine to assist the research.</li>
					<li class="qualifications-li">Have passion in games, and/or e-commerce industry.</li>
					<li class="qualifications-li">1 or 2+ years working experience in related field.</li>
					<li class="qualifications-li">Good analytical thinking in providing solutions to problems.</li>
				</ul>
		</div>

		<div class="software-engineer job-content" id="finance" style="display: none">
			<p class="software-description">We are looking for a sharp, good-humored Finance and Accounting Coordinator who enjoys working in a constantly changing environment and streamlining a hectic day. You will primarily provide reports dedicated from Director and lead advisers. You will be working in a fast-paced, creative environment with passionate team members who are focused on quality and execution. If you like to tame chaos while remaining calm and flexible in the face of ever-changing priorities and needs, then this is the role for you.</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Transactions inputs on integrated accounting systems.</li>
					<li class="qualifications-li">Create invoices/receive invoices from customers/vendors.</li>
					<li class="qualifications-li">Prepare monthly income-expense reports for leads and coordinate special projects as needed.</li>
					<li class="qualifications-li">Determines cost of operations by establishing standard costs; collecting operational data.</li>
					<li class="qualifications-li">Identified financial status by comparing and analyzing actual results with plans and forecast.</li>
					<li class="qualifications-li">Perform monthly bank reconciliation processes.</li>
					<li class="qualifications-li">Report on monthly taxes.</li>
					<li class="qualifications-li">Co-ordinate with other departments and Lead Advisers on closing monthly reports.</li>
					<li class="qualifications-li">Maintains database by entering, verifying, and backing up data.</li>
					<li class="qualifications-li">Protects operation by keeping financial information confidential.</li>
					<li class="qualifications-li">Involved in making Finance system in company working together with develop team.</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">Bachelor’s Degree in Accounting, qualified and highly exception accounting major.</li>
					<li class="qualifications-li">Graduate from well-known University with GPA of Minimum 3.5 and above.</li>
					<li class="qualifications-li">Have 1 years’ experience working is an advantage.</li>
					<li class="qualifications-li">Fresh graduates are welcome to apply.</li>
					<li class="qualifications-li">Can Writing and Speak in English very well.</li>
					<li class="qualifications-li">know basic about Tax issue.</li>
					<li class="qualifications-li">Awesome time management skills.</li>
					<li class="qualifications-li">Excellent commitment to results.</li>
					<li class="qualifications-li">Ability to juggle multiple projects and priorities at once.</li>
					<li class="qualifications-li">Great communication skills and the ability to work effectively with a spectrum of personalities.</li>
					<li class="qualifications-li">Strong Excel, PowerPoint, and Google email/calendar/doc skills.</li>
					<li class="qualifications-li">Ability to maintain composure and sense of humor in high-pressure situations.</li>
				</ul>
		</div>

		<div class="software-engineer job-content" id="cs" style="display: none">
			<p class="software-description">We are looking for Customer Service. This role will be in charge of ensuring the needs of users are being satisfied and maintaining the good and helpful relationship with the itemku users. Successful candidates must able to manage and develop a customer service policy and keep finding ways to measure customer satisfaction and improve services.</p>
			<br>
			<p class="qualifications">Qualifications</p>
				<ul>
					<li class="qualifications-li">Fresh Graduate are welcome.</li>
					<li class="qualifications-li">Good interpersonal, written, and verbal communication skills in English.</li>
					<li class="qualifications-li">Native Indonesian language, both oral and written, in accordance with EYD "Ejaan Yang Disempurnakan".</li>
					<li class="qualifications-li">Excellent in listening skills, understand exactly what customers require.</li>
					<li class="qualifications-li">Strong problem solving skill.</li>
					<li class="qualifications-li">Working available at weekend and holiday (5 days working per 1 week).</li>
				</ul>
			<br>
			<p class="qualifications">Preferred Qualifications</p>
				<ul>
					<li class="qualifications-li">1 or 2+ years customer service field experience in/with IT industry and/or e-commerce.</li>
					<li class="qualifications-li">Able to Communicates courteously with customers by email, phone and/or face to face if needed.</li>
					<li class="qualifications-li">Skills in analysis, planning, management of competing priorities to meet multiple deliverables and deadlines, creativity in seeking new and better solutions, and forward thinking.</li>
				</ul>
		</div>
	</div>
</div>

	<div class="container-BG">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/BG_kiri.png" }}}' class="BG">
			<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/BG_kanan.png" }}}' class="BG">
	</div>
	<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/orang.png" }}}' class="mascot">

</section>

<section id="what" name="what">
	<div class="space"></div>
	<a href="#what" class="menu-link" style="position: relative"><p class="what">What is it like to work in Five Jack ?</p></a>

	
	<div class="icons">
		<div class="icons-container">
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/time.png" }}}' class="icons-img">
				<p class="icons-text-time">Flexible working hour:<br>Flexible creates higher responsibility</p>
			</div>
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/food.png" }}}' class="icons-img">
				<p class="icons-text-food">Free lunch:<br>You will never get hungry</p>
			</div>
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/voucher.png" }}}' class="icons-img">
				<p class="icons-text-voucher">Monthly itemku member voucher: For every game you love to play</p>
			</div>
		</div>
		<div class="icons-container">
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/calendar.png" }}}' class="icons-img">
				<p class="icons-text-calendar">14 Days Annual Leaves:<br>For every personal matter that you need to do</p>
			</div>
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/agile-dev.png" }}}' class="icons-img">
				<p class="icons-text-agile">Agile development lifecycle</p>
			</div>
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/fun.png" }}}' class="icons-img">
				<p class="icons-text-fun">Surrounded by smart, fun, and very tactical gamers</p>
			</div>
		</div>
		<div class="icons-container">
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/challenge.png" }}}' class="icons-img">
				<p class="icons-text-challenge">Everyday is a new challenge</p>
			</div>
			<div class="icons-row">
				<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/family.png" }}}' class="icons-img">
				<p class="icons-text-family">A company that you can tell is family at the same time</p>
			</div>
		</div>
	</div>
	</section>



<section id="contact">
	<div class="space"></div>
	<div class="contact">
		<div id="map"></div>
		<div class="contact-container">
			<div class="about">
				<h1 class="about-header">About Us</h1>
				<p class="about-text">itemku.com, the marketplace for game item trading in Indonesia.<br><br>Five Jack is a company which creates an e-commerce platform focusing on trading virtual game items in Indonesia called itemku. In 2016, our GMV is growing monthly by 35%, purchase conversion rate by 27%, and user retention rate by 18%.</p>
			</div>
			<div class="contact-address-container">
				<h1 class="about-header">Contact Us</h1>
				<div class="contact-address">
					<div class="contact-address-icons">
						<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/location.png" }}}' class="contact-img-location">
						<br>
						<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/phone.png" }}}' class="contact-img-address">
						<br>
						<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/email.png" }}}' class="contact-img-email">
					</div>
					<div class="contact-address-text">
						<p class="contact-address-text">Jl. Kamboja Raya no 15 B,<br>Kel Kota Bambu Utara,<br>Kecamatan Palmerah,<br>Jakarta Barat,<br>11420</p>
						<p class="contact-address-text">+62 - 21 - 567 - 2785</p>
						<p class="contact-address-text">support@fivejack.com</p>
					</div>
				</div>
			</div>
			<div class="keep-in-touch">
				<h1 class="about-header">Keep in Touch</h1>
				<div class="socmeds">
					<div><a href="https://www.facebook.com/itemku/" target="_blank" class="contact-link contact-img-fb"></a></div>
					<div><a href="https://angel.co/fivejack" target="_blank" class="contact-link contact-img-angellist"></a></div>
				</div>
			</div>
		</div>
	</div>
</section>


  
@stop