@extends('home')
@section('title', 'Crear entradas para el blog')
@section('contenido')
{!! Form::open(['route' => 'blogs.store', 'method' => 'POST','files'=>true]) !!}

				<div class="form-group">
					{!! Form::label('titulo','Título') !!}
					{!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del artículo','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('descripcion','Contenido') !!}
					{!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Contenido del artículo','required'])!!}
				</div>


				<div class="form-group">
					{!! Form::label('categoria','Categoria') !!}
					{!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
				</div>

				<div class="form-group">

					{!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('imagen','Imagen') !!}
					{!! Form::file('path')!!}
				</div>











				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

				</div>



			{!! Form::close() !!}
@endsection
