@extends('home')
@section('title', 'Crear articulo para las noticias')
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




		{!! Form::open(['route' => 'noticia.store', 'method' => 'POST','files'=>true]) !!}

		<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				{!! Form::label('titulo','Título') !!}
				{!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del artículo','required'])!!}
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				{!! Form::label('descripcion','Contenido') !!}
				{!! Form::textarea('descripcion',null,['class' =>'form-control', 'id'=>'textareay', 'placeholder' =>'Contenido del artículo'])!!}
			</div>

		</div>

		<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				{!! Form::label('categoria','Categoria') !!}
				{!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
			</div>

		</div>

		<div class="form-group">

			{!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
	</div>

	<div class="col-md-10 col-md-offset-1">
		<div class="form-group">
			<a data-toggle="collapse"
				data-parent="#accordion" href="#collapseTwo">
				<button class="btn btn-warning">Subir imagenes</button>
			</a>
		</div>
	</div>

		<div id="collapseTwo" class="panel-collapse collapse col-md-10 ">
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					{!! Form::label('imagen','Imagen 1') !!}
					{!! Form::file('image1')!!}
				</div>
			</div>

			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					{!! Form::label('imagen','Imagen 2') !!}
					{!! Form::file('image2')!!}
				</div>
			</div>

			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					{!! Form::label('imagen','Imagen 3') !!}
					{!! Form::file('image3')!!}
				</div>
			</div>
		</div>

		<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				<a data-toggle="collapse"
					data-parent="#accordion" href="#collapseTree">
					<button class="btn btn-warning">Subir un archivo</button>
				</a>
			</div>
		</div>

		<div id="collapseTree" class="panel-collapse collapse col-md-10 ">

			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					{!! Form::label('imagen','Imagen 1') !!}
					{!! Form::file('file')!!}
				</div>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}
			</div>
		</div>








			{!! Form::close() !!}



@endsection
