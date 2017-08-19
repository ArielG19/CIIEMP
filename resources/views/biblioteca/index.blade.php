@extends('layouts.app')
@section('title','Biblioteca Virtual')
@section('content')



<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2> Biblioteca</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							 tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,
							 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
					</div>
				</div>

				<div class="row" >
					<div class="col-md-3">
					</div>
					{!!Form::open(['route' => 'biblioteca', 'method' => 'GET'])!!}
					<div class="col-md-6">
				    <div class="input-group">
							{!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Buscar por...'])!!}

				      <span class="input-group-btn" id="search">
				        <button class="btn btn-primary" type="button"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
				      </span>
				    </div>
				  </div>
					{!!Form::close()!!}
				</div>




				<div class="row p-b">
					@foreach($downloads as $down)
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>
								<div class="fh5co-category"><a href="#">{{$down->category->name}}</a></div>
								<img src="{{asset('styleVoltage/images/Library-ciiemp.png')}}" alt="Image" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a >{{$down->titulo}}</a></h3>
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
				{!! $downloads->render()!!}
@endsection