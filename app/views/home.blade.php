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

	<div class="uvpspace"> 
		<h1 class="funyou" align="center">&quot;We Create Gamer's Heaven&quot;</h1>
	</div>
	<div class="content">
		<table width="760" height="550" align="center">
			<tr class="dropshadow">
				<td width="400" height="280" class="aboutus">
					<h2 align="left" class="white">&nbsp;</h2>
					<h2 align="left" class="white">About Us				</h2>
					<p align="justify" class="ex">Five Jack established in 2013, is a start-up company in gaming related products and value added service. In 2014, Fivejack comes with new business strategy that can change the behavior of gamers in Indonesia and Fivejack is committed to build better game service platform.</p>
				</td>
		 
				<td width="400" height="280" class="itemku">
					<h2 align="left">&nbsp;</h2>
					<h2 align="left">Our Service           	  </h2>
					<div class="service_logo">
						<a href="http://itemku.com/" target="_blank" id="itemku_link"><img src='{{{ Config::get("constant.RESOURCE_URL") . "images/itemku.png" }}}' alt="itemku" width="102" height="36" align="left"></a>
					</div>           	  
					<p class="itembox">itemku is the pioneer platform in Indonesia to supply information about price of game item and game money. </p>
				</td>
			</tr>
			<tr>
				<td width="400" height="280" class="itemku">
				<h2 align="left" >&nbsp; </h2>
				<h2 align="left" >Career</h2>
				<p class="job"> We are looking for<br> 
				1) <a href='{{{ Config::get("constant.BASE_URL") }}}career/agd'>Advertising Graphic Designer</a><br>
				2) <a href='{{{ Config::get("constant.BASE_URL") }}}career/se'>Software Engineer</a><br>
				3) <a href='{{{ Config::get("constant.BASE_URL") }}}career/dm'>Digital Marketer</a><br>
				</p>				
				</td>
		  
				<td width="400" height="280" class="aboutus"> <h2 align="left" class="white">&nbsp;</h2>
				<h2 align="left" class="white">Contact</h2>
				<p id="contact_title" class="es">
				  Address<br><br><br><br>
				  Phone<br><br>
				  Email
				</p>
				<div id="contact_separator"></div>
				<p id="contact_context" class="es">
					Jl. Kamboja Ujung Blok 1 No.3B,<br>
					Tomang, Jakarta Barat,<br>
					Indonesia<br><br>
					+62 21 567 2785<br><br>				  
					support@fivejack.com
				</p>
				 
				 </td>
			</tr>
		</table>
	</div>
@stop