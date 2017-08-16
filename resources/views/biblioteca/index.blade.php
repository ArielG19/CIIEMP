@extends('layouts.app')
@section('title','Biblioteca Virtual')
@section('content')
<div class="fh5co-blog-style-1">
			<div class="container">
				<h2> Biblioteca</h2>
				<div class="row p-b">
					@foreach($downloads as $down)
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">

						<div class="fh5co-post wow fadeInLeft">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>

								<img src="/styleVoltage/images/CiiempBlog.png" alt="Image" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a href="#">{{$down->titulo}}</a></h3>
								<p>{{$down->descripcion}}</p>
							</div>
							<div class="fh5co-post-meta" id="btn">
								<a class="btn btn-primary" href="download/pdf/{{$down->path}}" target="_blank" role="button">Visualizar</a>
                <a class="btn btn-primary" href="download/pdf/{{$down->path}}" download="{{$down->path}}" role="button">Descagar</a>
							</div>
						</div>



					</div>
					@endforeach()

        </div>
@endsection
