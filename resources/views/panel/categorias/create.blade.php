@extends('home')
@section('title', 'Registrar Categorías')
@section('contenido')

    {!! Form::open(['route' => 'categoria.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nombre de la categoría','required','unique'])!!}
    </div>


    <div class="form-group">
        {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

    </div>




    {!! Form::close() !!}

@endsection
