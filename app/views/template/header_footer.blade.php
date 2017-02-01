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
	<div id="header">
		<div class="header_context">
			<div class="fivejacklogo">
				<a href='{{{ Config::get("constant.BASE_URL") }}}'><img src='{{{ Config::get("constant.RESOURCE_URL") . "images/logo.png" }}}' width="130" height="20" alt="logo"></a>
			</div>	
			<div class="menu">
				<ul class="all-li">
					<li>HOME</li>
					<li>PRODUCT</li>
					<li>CAREER</li>
					<li>CONTACT</li>
				</ul>
			</div>
		</div>
	</div>
	
	@yield('contents')
  
	<div class="footer">
		<p class="footer_context" align="center">&copy; Copyright 2014 PT. Five Jack All Right Reserved.</p>
	</div>

</div>
@stop