@extends('home')
@section('title', 'Crear entradas para el blog')
@section('contenido')

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'blogs.store', 'method' => 'POST','files'=>true]) !!}


    <div class="form-group">
        {!! Form::label('titulo','Título') !!}
        {!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del artículo','required'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion','Contenido') !!}
        {!! Form::textarea('descripcion',null,['class' =>'form-control', 'id'=>'textareay', 'placeholder' =>'Contenido del artículo'])!!}
    </div>

    <input name="iagem" type="file" id="upload" class="hidden" onchange="">


    <div class="form-group">
        {!! Form::label('categoria','Categoria') !!}
        {!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('imagen','Imagen') !!}
        {!! Form::file('path',['accept'=>'image/x-png,image/jpeg'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('imagen','Subir un archivo') !!}
        {!! Form::file('file')!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

    </div>
    {!! Form::close() !!}

@endsection
