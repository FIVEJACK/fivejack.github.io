@extends('template.base')

@section('css_import')
@yield('meta_tag')
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
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
				<a href='{{{ Config::get("constant.BASE_URL") }}}'><img src='{{{ Config::get("constant.RESOURCE_URL") . "images/logo.png" }}}' width="130" height="20" alt="logo" class="fivejacklogo"></a>
			</div>	
			<div id="menu">
				<nav>
					<ul class="all-li responsive" id="my_all_li">
						<a id="menu_home" href="#home" class="menu-link"><li><div class="icons-nav-home"></div><div class="text-nav">HOME</div></li></a
						><a id="menu_product" href="#product" class="menu-link"><li><div class="icons-nav-product"></div><div class="text-nav">PRODUCT</div></li></a
						><a id="menu_career" href="#career" class="menu-link"><li><div class="icons-nav-career"></div><div class="text-nav">CAREER</div></li></a
						><a id="menu_contact" href="#contact" class="menu-link"><li><div class="icons-nav-contact"></div><div class="text-nav">CONTACT</div></li></a
						>
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