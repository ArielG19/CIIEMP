@extends('home')
@section('title', 'Registrar proyecto de egresado')
@section('contenido')


    <u><h2 class="text-center">Nuevo Proyecto de Egresado</h2></u>
    {!! Form::open(['route' => 'proyectos.storeEgresado', 'method' => 'POST','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('titulo','Título') !!}
        {!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del Proyecto','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('imagen','Imagen de Entrada') !!}
        {!! Form::file('imagen',['required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('responsable','Responsable') !!}
        {!! Form::text('responsable',null,['id'=>'txtresponsable','class' =>'form-control', 'placeholder' =>'Responsable del Proyecto','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('responsable','Contacto') !!}
        {!! Form::text('tel',null,['class' =>'form-control', 'placeholder' =>'Número de telefono o correo electronico','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('historia','Historia') !!}
        {!! Form::textarea('historia',null,['class' =>'form-control', 'placeholder' =>'Breve Historia del Proyecto 300 palabras','maxlength' => 300,'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('resumenLargo','Resumen de 500 palabras') !!}
        {!! Form::textarea('resumenLargo',null,['class' =>'form-control', 'placeholder' =>'Resumen Largo','maxlength' => 2674,'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('categoria','Categoría') !!}
        {!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('imagen','Subir múltiples imágenes') !!}
        {!! Form::file('image[]',['multiple' => 'multiple','accept'=>'image/x-png,image/jpeg'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}
    </div>
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
                    $('#cmbprofesor').prop("disabled", true);
                }
                else {

                    $('#txtresponsable').prop("disabled", true);
                    $('#cmbprofesor').prop("disabled", false);
                    $('#txtresponsable').val("");
                }

            });

        });

    </script>

@endsection
