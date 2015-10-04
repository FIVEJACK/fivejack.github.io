<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>@yield('title')</title>

@yield('meta')

<script type="text/javascript" language="javascript">
var resource_url = "{{{ Config::get('constant.RESOURCE_URL') }}}";
</script>

@yield('css_import')

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
@yield('js_import')

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51504368-1', 'fivejack.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
	ga(function(){
		if (/utm_/.test(location.search) && window.history.replaceState){  
  
		  // thx @cowboy for the revised hash param magic.
		  var oldUrl = location.href;
		  var newUrl = oldUrl.replace(/\?([^#]*)/, function(_, search) {
			search = search.split('&').map(function(v) {
			  return !/^utm_/.test(v) && v;
			}).filter(Boolean).join('&'); // omg filter(Boolean) so dope.
			return search ? '?' + search : '';
		  });
		 
		  if ( newUrl != oldUrl ) {
			window.history.replaceState({},'', newUrl); 
		  }
		  
		}
	});
</script>
@yield('js')

</head>
<body>
@yield('body')
</body>
</html>