@extends ('layout')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
					<h2 style="margin-left:220px;">Just 7-Steps</h2>
					<span style="margin-left:150px;" class="byline">Welcome to 7-steps a blog by Canopi</span>
				<hr style="margin-right: 150px; margin-top: 20px;" width=420px;>
			</div>

			<p><img src="images/steps.jpg" alt="" class="image image-full" /> </p>

			<!-- <p></p> -->
		</div>


		<div id="sidebar">
			<h2 style="margin-top: 20px; margin-left: 165px;">Latest</h2>
			<ul class="style1">
        @foreach ($articles as $article)
				<li class="first">
					<h3>
            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
          </h3>
					<p>{{ $article->excerpt }}.</p>
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
			<!-- <div id="stwo-col">
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
			</div> -->
		</div>
	</div>
</div>
@endsection
