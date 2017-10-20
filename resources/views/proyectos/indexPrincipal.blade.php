@extends('layouts.app')
@section('title','Proyectos recientes')
@section('banner','/styleVoltage/images/innovacion.png')
@section('content')

<link rel="stylesheet" href="../css/proyectos.css">

<div class="fh5co-blog-style-1">

		<div class="container">

			<h2 class="text-center">Proyectos de Innovación y Emprendimiento</h2>


				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							 tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,
							 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
					</div>
				</div>

				<div class="row" >
					<div class="col-md-3" >
					</div>
					{!!Form::open(['route' => 'biblioteca', 'method' => 'GET'])!!}
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

				@foreach($proyectos as $proyecto)
				<a href="detalleProyecto/{{$proyecto->id}}">
					<article>
					  <div class="item-wrapper">
					    <figure>
					      <div class="image img-responsive" style="background-image:url('/images/{{$proyecto->imagen}}');"></div>
					      <div class="lighting"></div>
					    </figure>
					    <div class="item-content">
					      <h1>{{$proyecto->titulo}}</h1>
					      <p>{{$proyecto->resumenCorto}}</p>
					      <div class="author colorLetra">{{$proyecto->responsable}}</div>
					    </div>
					  </div>
					</article>
				</a>
				@endforeach


				<article>
				  <div class="item-wrapper">
				    <figure>
				      <div class="image" style="background-image:url(http://www.unan.edu.ni/wp-content/gallery/judc-1/14805627_1084142188305542_1641663142_n.jpg);"></div>
				      <div class="lighting"></div>
				    </figure>
				    <div class="item-content">
				      <h1>Second Article Title</h1>
				      <p>Donec pede justo fringilla vel aliquet nec vulputate eget arcu</p>
				      <div class="author">Edna Hardy</div>
				    </div>
				  </div>
				</article>
				<article>
				  <div class="item-wrapper">
				    <figure>
				      <div class="image" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLR0dpLWJDU3lMc28);"></div>
				      <div class="lighting"></div>
				  </figure>
				    <div class="item-content">
				      <h1>Third Article Title</h1>
				      <p>In enim justo rhoncus ut imperdiet a venenatis vitae justo</p>
				      <div class="author">Kayla	Beck</div>
				    </div>
				  </div>
				</article>


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