@extends('home')
@section('title', 'Nuevo Proyecto')
@section('contenido')

<div>
	<u><h2 class="text-center">Nuevo Proyecto Estudiante</h2></u>
	{!! Form::open(['route' => 'proyectos.store', 'method' => 'POST','files'=>true]) !!}

		<div class="form-group col-md-8">
				{!! Form::label('titulo','Título') !!}
				{!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del Proyecto','required'])!!}
		</div>

		<div class="form-group col-md-8">
				{!! Form::label('imagen','Imagen de Entrada') !!}
				{!! Form::file('imagen',['required'])!!}
		</div>

		<div class="form-group col-md-6">
				{!! Form::label('profesor','Buscar Responsable') !!}

				{!! Form::select('id_profesor',$profesor, null,['id'=>'cmbprofesor','class' =>'form-control'])!!}


		</div>

		<div class="form-group col-md-6">
				{!! Form::label('responsable','Introducir Responsable Manualmente') !!}
				{!! Form::checkbox('checkbox', 'value',null,['id'=>'checkbox'])!!}
				{!! Form::text('responsable',null,['id'=>'txtresponsable','class' =>'form-control', 'placeholder' =>'Responsable del Proyecto','required','disabled'])!!}
		</div>

		<div class="form-group col-md-8">
				{!! Form::label('resumenCorto','Resumen de 100 palabras') !!}
				{!! Form::text('resumenCorto',null,['class' =>'form-control', 'placeholder' =>'Lema o Resumen corto','maxlength' => 100,'required'])!!}
		</div>

		<div class="form-group col-md-8">
				{!! Form::label('resumenLargo','Resumen de 300 palabras') !!}
				{!! Form::textarea('resumenLargo',null,['class' =>'form-control', 'placeholder' =>'Resumen Largo','maxlength' => 300,'required'])!!}
		</div>

		<div class="form-group col-md-8">
				{!! Form::label('categoria','Categoria') !!}
				{!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
		</div>

		<div class="form-group col-md-8">

				{!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
		</div>

		<div class="col-md-12">
				<div class="form-group">
						{!! Form::label('imagen','Subir multiples imagenes') !!}
						{!! Form::file('image[]',['multiple' => 'multiple','accept'=>'image/x-png,image/jpeg'])!!}
				</div>
		</div>







		<div class="form-group col-md-8">

				{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

		</div>


	{!! Form::close() !!}

</div>
	@section('script')

		<script>
			$(function(){

				//$('#txtresponsable').hide();

				$('#checkbox').click(function(){

						var check = $('#checkbox').prop("checked");

						if(check){

							$('#txtresponsable').prop( "disabled", false ).focus();
							$('#cmbprofesor').prop( "disabled", true );
						}
						else{

							$('#txtresponsable').prop( "disabled", true );
							$('#cmbprofesor').prop( "disabled", false );
							$('#txtresponsable').val("");
						}

				});

			});

		</script>

	@endsection

@endsection
