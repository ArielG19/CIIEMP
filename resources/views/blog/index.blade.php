@extends('layouts.app')
@section('title','Entradas recientes')
@section('content')
<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-12 col-md-offset-6 ">
						<h2> Últimas Noticias</h2>

					</div>
				</div>
				@foreach($blogs as $blog)
				<div class="row p-b">
					<div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>
								<div class="fh5co-category"><a href="#">{{$blog->category->name}}</a></div>
								@if(empty($blog->path))
								<img src="/images/no-imagen.png"  class="img-responsive">
								@else

								<img src="/images/creatividad4.jpg" alt="Image" class="img-responsive">
								
								@endif
							</div>
							<div class="fh5co-post-text">
								<h3><a href="#">{{$blog->titulo}}</a></h3>
								<p>{{substr($blog->descripcion, 0,300)}}...</p>
							</div>
							<div class="fh5co-post-meta">
								<a href="#"><i class="icon-chat"></i> ejem 33</a>
								<a href="#"><i class="icon-clock2"></i>{{Date::parse($blog->created_at)->format('j \d\e F \d\e Y')}}</a>

							</div>

							<a class="btn btn-primary" href="{{'blogin'}}/{{$blog->slug}}" role="button">Leer mas</a>


						</div>
					</div>


				</div>
				@endforeach()
				{!! $blogs->render()!!}

			</div>
		</div>


@endsection
