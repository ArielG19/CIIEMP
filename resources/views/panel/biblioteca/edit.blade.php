@extends('home')
@section('title', 'Editar los archivos de la Biblioteca')
@section('contenido')


    {!!Form::model($biblio,['route'=>['bibliotecas.update',$biblio],'method'=>'PUT','files' => true])!!}

    <div class="form-group">
        {!!Form::label('titulo','Titulo:')!!}
        {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa el título','required'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion','Contenido') !!}
        {!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Contenido','maxlength' => 150,'required'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('usuario','Usuario') !!}
        {!! Form::select('id_usuario',$users, null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('categoria','Categoria') !!}
        {!! Form:: select('id_categoria',$categorias, null,['class'=>'form-control']) !!}
    </div>

    @if(empty($biblio->image))
        <img src="{{asset('images')}}/no-imagen.jpg" alt="" style="width:100px;"/>
    @else
        <img src="{{asset('images/biblioteca')}}/{{$biblio->image}}" alt="" style="width:100px;"/>
    @endif

    <div class="form-group">
        {!! Form::label('imagen','Imagen') !!}
        {!! Form::file('image',['accept'=>'image/x-png,image/jpeg'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('imagen','Archivo:')!!}
        {!!Form::file('path')!!}
        <a href="{{asset('download/pdf')}}/{{$biblio->path}}" target="_blank">{{basename($biblio->path)}}</a>

    </div>

    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}<br>
@endsection
