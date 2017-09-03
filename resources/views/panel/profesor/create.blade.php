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

		{!! Form::open(['route' => 'profesor.store', 'method' => 'POST','files'=>true]) !!}

						<div class="form-group">
							{!!form::label('Nombre:')!!}
							{!!form::text('primer_nombre',null,['class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
						</div>
						<div class="form-group">
							{!!form::label('Segundo Nombre:')!!}
							{!!form::text('segundo_nombre',null,['class'=>'form-control','placeholder'=>'Escriba su segundo nombre'])!!}
						</div>
						<div class="form-group">
							{!!form::label('Primer Apellido:')!!}
							{!!form::text('primer_apellido',null,['class'=>'form-control','placeholder'=>'Escriba su primer apellido'])!!}
						</div>
						<div class="form-group">
							{!!form::label('Segundo Apellido:')!!}
							{!!form::text('segundo_apellido',null,['class'=>'form-control','placeholder'=>'Escriba su segundo apellido'])!!}
					 </div>
						<div class="form-group">
							{!!form::label('Telefono:')!!}
							{!!form::text('telefono',null,['class'=>'form-control','placeholder'=>'Escriba su numero de telefono'])!!}
						</div>
						<div class="form-group">
							{!!form::label('Descripcion')!!}
							{!!form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Escriba su segundo apellido'])!!}
					 </div>


				<div class="form-group">

					{!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
				</div>














				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

				</div>



			{!! Form::close() !!}
@endsection
