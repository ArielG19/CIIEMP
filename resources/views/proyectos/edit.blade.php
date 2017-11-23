@extends('home')
@section('title', 'Editando Proyecto')
@section('contenido')


    @if($proyect->tipo == "estudiante")
        <u><h4 class="text-center col-xs-12">Editando Proyecto de Estudiante</h4></u>
    @else
        <u><h4 class="text-center col-xs-12">Editando Proyecto de Egresado</h4></u>
    @endif


    {!! Form::model($proyect,['route' => ['proyectos.update',$proyect], 'method' => 'PUT','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('titulo','Título') !!}
        {!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del Proyecto','required'])!!}
    </div>

    @if(empty($proyect->imagen))
        <img src="{{asset('images')}}/no-imagen.jpg" alt="" style="width:100px;"/>
    @else
        <img src="{{asset('images')}}/{{$proyect->imagen}}" alt="" style="width:100px;"/>
    @endif

    <div class="form-group">
        {!! Form::label('imagen','Imagen de Entrada') !!}
        {!! Form::file('imagen')!!}
    </div>

    @if($proyect->tipo == "estudiante" and $proyect->teacher_id != null)


        <div class="form-group">
            {!! Form::label('profesor','Buscar Responsable') !!}

            {!! Form::select('id_profesor',$profesor, null,['id'=>'cmbprofesor','class' =>'form-control'])!!}
        </div>

    @endif

    @if(isset($proyect->responsable))
        <div class="form-group col-md-6">
            {!! Form::label('responsable','Introducir Responsable') !!}


            {!! Form::text('responsable',null,['id'=>'txtresponsable','class' =>'form-control', 'placeholder' =>'Responsable del Proyecto','required','disabled'])!!}
        </div>

    @else
        <div class="form-group col-md-6">
            {!! Form::label('responsable','Introducir Responsable ') !!}
            {!! Form::checkbox('checkbox', 'value',null,['id'=>'checkbox'])!!}
            {!! Form::text('responsable',null,['id'=>'txtresponsable','class' =>'form-control', 'placeholder' =>'Responsable del Proyecto','required','disabled'])!!}
        </div>
    @endif
    <div class="form-group col-md-6">
        {!! Form::label('Contacto','Contacto') !!}
        {!! Form::text('tel',null,['id'=>'txtcontacto','class' =>'form-control', 'placeholder' =>'Número de telefono o correo electronico','required','disabled'])!!}
    </div>

    @if($proyect->historia != null )

        <div class="form-group col-md-6">
            {!! Form::label('historia','Historia') !!}
            {!! Form::textarea('historia',null,['class' =>'form-control', 'placeholder' =>'Breve Historia del Proyecto 300 palabras','maxlength' => 2674,'required'])!!}
        </div>
    @endif
    <div class="form-group  col-md-6">
        {!! Form::label('resumenLargo','Resumen de 500 palabras') !!}
        {!! Form::textarea('resumenLargo',null,['class' =>'form-control', 'placeholder' =>'Resumen Largo','maxlength' => 2674,'required'])!!}
    </div>


    <div class="form-group col-md-12 col-xs-6">
        {!! Form::label('categoria','Categoría') !!}
        {!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
    </div>


    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('imagen','Subir múltiples imágenes') !!}
        {!! Form::file('image[]',['multiple' => 'multiple','accept'=>'image/x-png,image/jpeg'])!!}
    </div>
    <div class="form-group col-md-6 col-xs-12">
        <a class="btn btn-info btn-sm btnimg" role="button"
           href="{{route('proyectos.showimg', $proyect->id)}}" onclick="window.open(this.href, 'mywin',
                                            'left=550,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
            <span>Imágenes <i class="fa fa-eye" aria-hidden="true"></i></span>
        </a>
    </div>




    <div class="form-group col-md-12 col-xs-12">
        {!! Form::submit('Editar', ['class' =>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection



@section('script')

    @if(isset($proyect->responsable))
        <script>
            $(function () {


                $('#txtresponsable').prop("disabled", false).focus();
                $('#txtcontacto').prop("disabled", false);


            });

        </script>
    @else

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

                    }

                });

            });

        </script>
    @endif
@endsection
