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

    {!! Form::open(['route' => ['categoria.update', $categoria], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $categoria->name,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
    </div>



    <div class="form-group">
        {!! Form::submit('Editar', ['class' =>'btn btn-primary']) !!}

    </div>



    {!! Form::close() !!}
@endsection
