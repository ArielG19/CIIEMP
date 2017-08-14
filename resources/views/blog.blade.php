@extends('layouts.app')
@section('title','Entradas recientes')
@section('content')
<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-8 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>
								<div class="fh5co-category"><a href="#">{{$blogs->category->name}}</a></div>
								@if(empty($blogs->path))
								<img src="/images/no-imagen.png"  class="img-responsive">
								@else
								<img src="/images/{{$blogs->path}}" alt="Image" class="img-responsive">
								@endif
							</div>
							<div class="fh5co-post-text">
								<h3><a href="#">{{$blogs->titulo}}</a></h3>
								<p class="parrafo1">{{$blogs->descripcion}}</p>
							</div>
							<div class="fh5co-post-meta">
								<a href="#"><i class="icon-chat"></i> ejem 33</a>
								<a href="#"><i class="icon-clock2 "></i>{{Date::parse($blogs->created_at)->format('j \d\e F \d\e Y')}}</a>

							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-2 col-xs-2 col-xxs-12 hidden-xs categoryd">
							<!-- Category -->
							<div class="single category">
								<h3 class="side-title">Categorias</h3>
								@foreach($blogs as $blog)
								<ul class="list-unstyled">
									<li><a href="" title="">{{$blogs->category->name}} </a></li>
								@endforeach()
								</ul>
   				</div>
				</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-11 col-xxs-11">
						<h2>Comentarios</h2>
						<div id="disqus_thread"></div>
								<script>

								/**
								*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
								*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
								/*
								var disqus_config = function () {
								this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
								this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');
							s.src = 'https://ciiemp.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

					</div>

				</div>
			</div>
		</div>

@endsection
