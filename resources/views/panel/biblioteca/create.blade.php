@extends('home')
@section('title', 'Subir archivo PDF')
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

		{!! Form::open(['route' => 'bibliotecas.store', 'method' => 'POST','files'=>true]) !!}


				<div class="form-group">
					{!! Form::label('titulo','Título') !!}
					{!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del artículo','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('descripcion','Contenido') !!}
					{!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Contenido del artículo','maxlength' => 150,'required'])!!}
				</div>


				<div class="form-group">
					{!! Form::label('categoria','Categoria') !!}
					{!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
				</div>

				<div class="form-group">

					{!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('Archivo PDF','Archivo') !!}
					{!! Form::file('path',['required'])!!}
				</div>











				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

				</div>



			{!! Form::close() !!}
@endsection
