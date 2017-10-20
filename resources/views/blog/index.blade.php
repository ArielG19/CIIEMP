@extends('layouts.app')
@section('title','Entradas recientes')
@section('banner','/styleVoltage/images/Library-ciiemp.png')
@section('content')
<div class="fh5co-blog-style-1">
			<div class="container">
				<h2>Entradas Recientes</h2>
				<hr>


				<div class="row p-b">

					<div class="col-md-8 col-sm-6 col-xs-6 col-xxs-12">
						@foreach($blogs as $blog)
						<div class="fh5co-post wow fadeInLeft">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>
								<div class="fh5co-category">
									<a href="{{route('bloghome.filtrar.categorias',$blog->category->name)}}">
										{{$blog->category->name}}
									</a></div>
								@if($blog->path==null)
								<img src= "{{ url('styleVoltage/images/no-disponible.jpg') }}"  class="img-responsive">
								@else

								<img src="/images/{{$blog->path}}" alt="Image" class="img-responsive">

								@endif
							</div>
							<div class="fh5co-post-text">
								<h3><a href="{{'/bloghome/blogin/'}}/{{$blog->slug}}">{{$blog->titulo}}</a></h3>
								<p>{{substr(strip_tags($blog->descripcion), 0,300)}}...</p>
							</div>
							<div class="fh5co-post-meta">
								<a href="#"><i class="icon-chat"></i>{{$blog->comentarios->count()}}</a>
								<a href="#"><i class="fa fa-calendar"></i>{{Date::parse($blog->created_at)->format('j \d\e F \d\e Y')}}</a>
								<a href="#"><i class="icon-user" aria-hidden="true"></i>{{$blog->users->name}}</a>
								<a class="btn btn-primary pull-right" href="{{'/bloghome/blogin'}}/{{$blog->slug}}" role="button">Leer mas</a>
							</div>

						</div>
						@endforeach()
					</div>


					<div class="col-md-4 col-lg-4  categoryd">
							<!-- Category -->
							<div class="single category">
								<h3 class="side-title">Categorias</h3>

								<ul class="list-group">
								@foreach($allcategorias as $cate)
									<li class="list-group-item">
										<span class="badge">{{$cate->blogs->count()}}</span>
										<a href="{{route('bloghome.filtrar.categorias',$cate->name)}}">
											{{$cate->name}}
										</a>
								 </li>
								@endforeach()
								<li class="list-group-item"><a href="/bloghome">
									Todos
								</a></li>

								</ul>
   				</div>
				</div>
				</div>




				{!! $blogs->render()!!}

			</div>
		</div>


@endsection
