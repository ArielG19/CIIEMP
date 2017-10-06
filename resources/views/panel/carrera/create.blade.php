@extends('home')
@section('title', 'Crear de carreras')
@section('contenido')

{!! Form::open(['route' => 'carrera.store', 'method' => 'POST']) !!}
				<div class="form-group">
					{!! Form::label('carrera','Carrera') !!}
					{!! Form::text('carrera',null,['class' =>'form-control', 'placeholder' =>'Nombre de la carrera','required'])!!}
<<<<<<< HEAD
					{{--!! Form::label('descripcion','Carrera') !!}
					{!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Descripcion de la carrera','required'])!!--}}
=======
					{!! Form::label('descripcion','Carrera') !!}
					{!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Descripcion de la carrera','required'])!!}
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
				</div>


				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

				</div>



			{!! Form::close() !!}
@endsection
