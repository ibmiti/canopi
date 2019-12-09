@extends ('layout')

@section ('content')
<div id="wrapper">
	<div id="page"
       class="container">
		<div id="content">

<!-- for each article create below content -->
      @foreach ($articles as $article)
        <div class="content">
            <div class="title">
              <h2>
                <a href="/articles/{{ $article->id }}">
                  {{ $article->title }}
                </a>
              </h2>
            </div>

            <p>
              <img
                src="images/banner.jpg"
                alt=""
                class="image image-full"
              />
              <!-- src="{{ $article->thumbnail }}"  we can add this later instead of images/banner-->
            </p>
      {{!! $article->excerpt !!}}

        </div>
@endforeach


    </div>
	</div>
</div>
@endsection
