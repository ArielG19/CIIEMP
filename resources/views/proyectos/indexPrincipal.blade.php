@extends('layouts.app')
@section('title','Proyectos recientes')

@section('content')

<link rel="stylesheet" href="../css/proyectos.css">

<div class="fh5co-blog-style-1">
		<div class="container">

				<h2 class="text-center">PROYECTOS DE INNOVACIÓN Y EMPRENDIMIENTO </h2>
				<br>
				<br>
				<div class="row" >
								<div class="col-md-3"></div>
									{!!Form::open(['route' => 'proyectos', 'method' => 'GET'])!!}
									<div class="col-md-6">
										<div class="input-group">
											{!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Buscar por...'])!!}
											<span class="input-group-btn" id="search">
												<button class="btn btn-primary" name="titulo" type="button"><i class="fa fa-search fa-lg" ></i></button>

											</span>
										</div>
									</div>
									{!!Form::close()!!}
				</div>
				<hr>
				<div class="row col-md-12 col-xs-6">
							@foreach($proyectos as $proyecto)
							<a href="detalleProyecto/{{$proyecto->id}}">
								<article>
								  <div class="item-wrapper">
									    <figure>
									      <div class="image img-responsive" style="background-image:url('/images/proyecto/{{$proyecto->imagen}}');"></div>
									      <div class="lighting"></div>
									    </figure>
								    	<div class="item-content">
											@if ($proyecto->tipo == "estudiante")
												<div align="right" class="author colorLetra">Proyecto de Estudiante</div>
											@else
												<div align="right" class="author colorLetra">Proyecto de Egresado</div>
											@endif
								      		<h1>{{substr(strip_tags($proyecto->titulo), 0,44)}}...</h1>
											<p>{{substr(strip_tags($proyecto->resumenLargo), 0,300)}}...</p>
								      		<div class="author colorLetra">{{$proyecto->responsable}}</div>
								    	</div>
								  </div>
								</article>
							</a>
							@endforeach
				</div>

				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
				<script>
				    var articles = $('article > .item-wrapper'),
				    lightingRgb = '255,255,255';

					articles.mousemove(function(e) {
					  var current = $(this),
					      x = current.width() - e.offsetX * 2,
					      y = current.height() - e.offsetY * 2,
					      rx = -x / 30,
					      ry = y / 24,
					      deg = Math.atan2(y, x) * (180 / Math.PI) + 45;
					  current.css({"transform":"scale(1.05) rotateY("+rx+"deg) rotateX("+ry+"deg)"});
					  $('figure > .lighting',this).css('background','linear-gradient('+deg+'deg, rgba('+lightingRgb+',0.32) 0%, rgba('+lightingRgb+',0) 100%)');
					});

					articles.on({
					  'mouseenter':function() {
					    var current = $(this);
					    current.addClass('enter ease').removeClass("leave");
					    setTimeout(function(){
					      current.removeClass('ease');
					    }, 280);
					  },
					  'mouseleave':function() {
					    var current = $(this);
					    current.css({"transform":"rotate(0)"});
					    current.removeClass('enter').addClass("leave");
					    $('figure > .lighting',this).removeAttr('style');
					  }}
					);
				</script>

		</div>
</div>
@endsection
