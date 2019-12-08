<!DOCTYPE html>

<!-- start of setting up document -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet"  />
<link href="css/fonts.css" rel="stylesheet"  />
</head>
<!-- end of setting up document -->

<body>

	<!-- custom data that will be shared to all files that extend this file -->
	<div class="header-wrapper">
	  <div id="header" class="container">
	      <div id="logo">
	        <h1><a href="/">Canopi</a></h1>
	      </div>
	      <div id="menu">
	        <ul>
	          <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
	          <li class="{{ Request::path() === '/blog' ? 'current_page_item' : '' }}"><a href="/blog" accesskey="2" title="">7 Steps - a Canopi blog</a></li>
	          <li class="{{ Request::path() === '/about' ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">About Us</a></li>
	          <li class="{{ Request::path() === '/contact' ? 'current_page_item' : '' }}"><a href="/contact" accesskey="4" title="">Contact</a></li>
	          <li class="{{ Request::path() === '/canvas' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Coming Soon : canvas</a></li>
	        </ul>
	      </div>
	  </div>


		@yield ('header')

	</div>
<!-- end of custom data of which to extend this layout -->

	@yield('content') <!-- using this here will allow us to yield the above content to other pages.. this is the partner of
		 extends () -->
		 <div id="copyright" class="container">
		 	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
		 </div>
</body>
</html> <!-- end of html for document -->
