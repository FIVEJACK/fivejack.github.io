@extends('template.base')

@section('css_import')
<link rel="stylesheet" type="text/css" href='{{{ Config::get("constant.RESOURCE_URL") . "css/header_footer.css" }}}'>
@stop

@section('js')
<script>
$(document).ready(function() {

	$('#itemku_link').on('click', function() {
		ga('send', 'event', 'button', 'click', 'itemku_link');
	});	
	
	$('#facebook_link').on('click', function() {
		ga('send', 'event', 'button', 'click', 'facebook_link');		
	});	
	
})
</script>
@stop

@section('body')
<div class="container">
	<div class="header">
		<div class="header_context">
			<div class="fivejacklogo">
				<a href='{{{ Config::get("constant.BASE_URL") }}}'><img src='{{{ Config::get("constant.RESOURCE_URL") . "images/logo.png" }}}' width="130" height="20" alt="logo"></a>
			</div>	
			<div id="menu">
				<nav>
					<ul class="all-li">
						<a id="menu_home" href="#home" class="menu-link"><li>HOME</li></a>
						<a id="menu_product" href="#product" class="menu-link"><li>PRODUCT</li></a>
						<a id="menu_career" href="#career" class="menu-link"><li>CAREER</li></a>
						<a id="menu_contact" href="#contact" class="menu-link"><li>CONTACT</li></a>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	
	@yield('contents')
  
	<div class="footer">
		<p class="footer_context" align="center">&copy; Copyright 2014 PT. Five Jack All Right Reserved.</p>
	</div>

</div>
@stop