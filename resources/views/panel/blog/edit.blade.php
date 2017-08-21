@extends('home')
@section('title', 'Editar entradas de blog')
@section('contenido')


{!!Form::model($blog,['route'=>['blogs.update',$blog],'method'=>'PUT','files' => true])!!}

	    <div class="form-group">
			{!!Form::label('titulo','Titulo:')!!}
			{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa el título'])!!}
		</div>

		<div class="form-group">
					{!! Form::label('descripcion','Contenido') !!}
					{!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Contenido'])!!}
		</div>

		<div class="form-group">
					{!! Form::label('usuario','Usuario') !!}
					{!! Form::select('id_usuario',$users, null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
					{!! Form::label('categoria','Categoria') !!}
					{!! Form:: select('id_categoria',$categorias, null,['class'=>'form-control']) !!}
		</div>

			@if(empty($blog->path))
 			  <img src="{{asset('images')}}/no-imagen.jpg" alt="" style="width:100px;"/>
 			 @else
 			 <img src="{{asset('images')}}/{{$blog->path}}" alt="" style="width:100px;"/>
 			 @endif

		<div class="form-group">
					{!!Form::label('imagen','Imagen:')!!}
					{!!Form::file('path')!!}
		</div>




	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}<br>
@endsection
