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

@stop