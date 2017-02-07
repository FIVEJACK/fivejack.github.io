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
	
	<img src='{{{ Config::get("constant.RESOURCE_URL") . "images/IMG_8387_edit2.jpg" }}}' alt="itemku" align="center" class="wallpaper-image">

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

@stop