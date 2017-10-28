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





		<div class="form-group">
<<<<<<< HEAD
					{!!Form::label('imagen','Archivo:')!!}
=======
<<<<<<< HEAD
					{!!Form::label('imagen','Imagen:')!!}
=======
					{!!Form::label('imagen','Archivo:')!!}
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
>>>>>>> 53212f1e893b5ba1968feabf46ee055168198fa7
					{!!Form::file('')!!}
					<a href="{{asset('download/pdf')}}/{{$biblio->path}}" target="_blank">{{basename($biblio->path)}}</a>

		</div>




	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}<br>
@endsection
