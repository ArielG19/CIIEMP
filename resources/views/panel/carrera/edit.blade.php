@extends('home')
@section('title', 'Editar de categorias')
@section('contenido')
@if(count($errors) >0)
<div class="alert alert-danger" role="alert">
  <ul>
  	@foreach($errors->all() as $error)
  	<li>{{$error}}</li>
  	@endforeach

  </ul>

</div>


@endif

          {!! Form::open(['route' => ['carrera.update', $carrera], 'method' => 'PUT']) !!}
				<div class="form-group">
          {!! Form::label('carrera','Carrera') !!}
					{!! Form::text('carrera',$carrera->carrera,['class' =>'form-control', 'placeholder' =>'Nombre de la carrera','required'])!!}
					{!! Form::label('descripcion','Descripcion') !!}
					{!! Form::textarea('descripcion', $carrera->descripcion,['class' =>'form-control', 'placeholder' =>'Descripcion de la carrera','required'])!!}
				</div>



				<div class="form-group">
					{!! Form::submit('Editar', ['class' =>'btn btn-primary']) !!}

				</div>



			{!! Form::close() !!}
@endsection
