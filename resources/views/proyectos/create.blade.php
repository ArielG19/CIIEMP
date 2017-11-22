<div>

</div>
@extends('home')
@section('title', 'Registrar proyecto de estudiante')
@section('contenido')
    <u><h2 class="text-center">Nuevo Proyecto Estudiante</h2></u>
    {!! Form::open(['route' => 'proyectos.store', 'method' => 'POST','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('titulo','Título') !!}
        {!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del Proyecto','required'])!!}
    </div>

    <div class="form-group">
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
    <div class="form-group">
        {!! Form::label('responsable','Contacto') !!}
        {!! Form::text('tel',null,['id'=>'txtcontacto','class' =>'form-control','placeholder' =>'Número de telefono o correo electronico','required','disabled'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('resumenLargo','Resumen de 500 palabras') !!}
        {!! Form::textarea('resumenLargo',null,['class' =>'form-control', 'placeholder' =>'Resumen Largo','maxlength' => 2674,'required'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('categoria','Categoría') !!}
        {!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
    </div>

    {!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}

    <div class="form-group">
        {!! Form::label('imagen','Subir múltiples imágenes') !!}
        {!! Form::file('image[]',['multiple' => 'multiple','accept'=>'image/x-png,image/jpeg'])!!}
    </div>
    {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection


@section('script')

    <script>
        $(function () {

            //$('#txtresponsable').hide();

            $('#checkbox').click(function () {

                var check = $('#checkbox').prop("checked");

                if (check) {

                    $('#txtresponsable').prop("disabled", false).focus();
                    $('#txtcontacto').prop("disabled", false);
                    $('#cmbprofesor').prop("disabled", true);
                }
                else {

                    $('#txtresponsable').prop("disabled", true);
                    $('#txtcontacto').prop("disabled", true);
                    $('#cmbprofesor').prop("disabled", false);
                    $('#txtresponsable').val("");
                    $('#txtcontacto').val("");
                }

            });

        });

    </script>

@endsection
