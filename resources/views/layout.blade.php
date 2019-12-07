<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<!-- include these into the css/ dir.. later  -->
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
	<div id="header-wrapper">
		 <div id="header" class="container">
			<div id="logo">
				 <!-- <h1><a href="#">7 steps</a></h1>  <!-- logo will go here -->
			</div>
			<div style="margin-top:-80px;" id="menu">
				<ul>
					<!-- this will make active the current link by whatever path has been routed to -->
					<li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
					<li class="{{ Request::path() === 'blog' ? 'current_page_item': '' }}"> <a href="/blog" accesskey="2" title="">Our Blog</a></li>
					<!-- <li><a href="/about" accesskey="3" title="">About Us</a></li> -->
					<li class="{{ Request::path() === 'canvas' ? 'current_page_item' : ''}}"><a href="" accesskey="4" title="">Coming Soon</a></li> <!-- canvas link -->
					<li class="{{ Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="" accesskey="5" title="">Coming Soon</a><li> <!-- our story or about us? -->
					<li class="{{ Request::path() === 'login' ? 'current_page_item' : ''}}"><a href="" accesskey="2" title="">Login</a></li>
				</ul>
			</div>
		</div>

		@yield ('header')

	</div>

	@yield('content')
</body>
</html>
