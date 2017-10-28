@extends('home')
@section('title', 'Crear de categorias')
@section('contenido')

    {!! Form::open(['route' => 'categoria.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
    </div>


    <div class="form-group">
        {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

    </div>
<<<<<<< HEAD



    {!! Form::close() !!}
=======
    {!! Form::close() !!}

>>>>>>> 53212f1e893b5ba1968feabf46ee055168198fa7
@endsection
