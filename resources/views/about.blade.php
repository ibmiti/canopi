<div id="header-wrapper">
   <div style="margin: -90px 0px 30px 0px;" id="header" class="container">
    <div style="padding: 0px 0px 60px 10px; margin-left:60px;" id="logo">
      <h1 style="font-size: 70px"><a href="#">7 steps</a></h1>
    </div>
    <div style="margin-top:20px;" id="menu">
      <ul>
        <li class="current_page_item"><a href="/" accesskey="1" title="">Back to Canopy</a></li>
        <li><a href="#" accesskey="2" title="">Coming-Soon</a></li>
        <!-- <li><a href="/about" accesskey="3" title="">About Us</a></li> -->
        <li><a href="#" accesskey="4" title="">Coming-Soon</a></li>
        <li><a href="#" accesskey="5" title="">Contact Us</a></li>
      </ul>
    </div>
  </div>

  @yield ('header')

</div>
    <div style="padding: 5px;" class="header-featured">
      <div id="banner-wrapper">
        <div id="banner" class="container">
          <!-- <h2 style="margin-bottom: 60px; padding-bottom: 80px;">7 steps</h2> -->
          <!-- <p>Lorem ipsum dolor sit amet,d tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p> -->
        </div>
      </div>
    </div>


@extends ('layout')




<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Welcome to our website</h2>
				<span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
			<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. </p>
			<p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
			<p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
		</div>


		<div id="sidebar">
			<ul class="style1">
        @foreach ($articles as $article)
				<li class="first">
					<h3>{{ $article->title }}</h3>
					<p><a href="#">{{ $article->excerpt }}.</a></p>
				</li>
        @endforeach
				<!-- <li>
					<h3>Sagittis diam dolor sit amet</h3>
					<p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
				</li>
				<li>
					<h3>Maecenas ac quam risus</h3>
					<p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
				</li> -->
			</ul>
			<div id="stwo-col">
				<div class="sbox1">
					<h2>Etiam rhoncus</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Amet ornare hendrerit lectus</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
					</ul>
				</div>
				<div class="sbox2">
					<h2>Integer gravida</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Consequat lorem phasellus</a></li>
						<li><a href="#">Amet turpis feugiat amet</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
