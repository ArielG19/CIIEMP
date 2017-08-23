@extends('layouts.app')
@section('title','Entradas recientes')
@section('content')
<div class="fh5co-blog-style-1">
			<div class="container">
				<h2> Últimas Noticias</h2>


				<div class="row p-b">

					<div class="col-md-8 col-sm-6 col-xs-6 col-xxs-12">
						@foreach($blogs as $blog)
						<div class="fh5co-post wow fadeInLeft">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>
								<div class="fh5co-category"><a href="#">{{$blog->category->name}}</a></div>
								@if(empty($blog->path))
								<img src="/images/no-imagen.png"  class="img-responsive">
								@else

								<img src="/styleVoltage/images/CiiempBlog.png" alt="Image" class="img-responsive">

								@endif
							</div>
							<div class="fh5co-post-text">
								<h3><a href="#">{{$blog->titulo}}</a></h3>
								<p>{{substr(strip_tags($blog->descripcion), 0,300)}}...</p>
							</div>
							<div class="fh5co-post-meta">
								<a href="#"><i class="icon-chat"></i> ejem 33</a>
								<a href="#"><i class="icon-clock2"></i>{{Date::parse($blog->created_at)->format('j \d\e F \d\e Y')}}</a>
								<a href="#"><i class="icon-user" aria-hidden="true"></i>{{$blog->users->name}}</a>
							</div>

							<a class="btn btn-primary" href="{{'blogin'}}/{{$blog->slug}}" role="button">Leer mas</a>


						</div>
						@endforeach()
					</div>


					<div class="col-md-4  categoryd">
							<!-- Category -->
							<div class="single category">
								<h3 class="side-title">Categorias</h3>
								@foreach($blogs as $blog)
								<ul class="list-unstyled">
									<li><a href="" title="">{{$blog->category->name}} </a></li>
								@endforeach()
								</ul>
   				</div>
				</div>
				</div>




				{!! $blogs->render()!!}

			</div>
		</div>


@endsection
