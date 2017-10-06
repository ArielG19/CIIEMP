@extends('home')
@section('title', 'Crear de categorias')
@section('contenido')

<<<<<<< HEAD
{!! Form::open(['route' => 'categoria.store', 'method' => 'POST']) !!}
				<div class="form-group">
					{!! Form::label('name','Nombre') !!}
					{!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
				</div>


				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

				</div>



			{!! Form::close() !!}
=======
    {!! Form::open(['route' => 'categoria.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
    </div>


    <div class="form-group">
        {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

    </div>



    {!! Form::close() !!}
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
@endsection
