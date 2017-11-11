@extends('home')
@section('title', 'Editando Proyecto')
@section('contenido')


    <u><h2 class="text-center">Editando Proyecto</h2></u>
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

    <div class="form-group col-md-6">
        {!! Form::label('profesor','Buscar Responsable') !!}

        {!! Form::select('id_profesor',$profesor, null,['id'=>'cmbprofesor','class' =>'form-control'])!!}


    </div>

    <div class="form-group col-md-6">
        {!! Form::label('responsable','Introducir Responsable Manualmente') !!}
        {!! Form::checkbox('checkbox', 'value',null,['id'=>'checkbox'])!!}
        {!! Form::text('responsable',null,['id'=>'txtresponsable','class' =>'form-control', 'placeholder' =>'Responsable del Proyecto','required','disabled'])!!}
    </div>
    @if($proyect->historia != null )

        <div class="form-group">
            {!! Form::label('historia','Historia') !!}
            {!! Form::textarea('historia',null,['class' =>'form-control', 'placeholder' =>'Breve Historia del Proyecto 300 palabras','maxlength' => 300,'required'])!!}
        </div>
    @endif

    @if($proyect->historia == null )
        <div class="form-group">
            {!! Form::label('resumenCorto','Resumen de 100 palabras') !!}
            {!! Form::text('resumenCorto',null,['class' =>'form-control', 'placeholder' =>'Lema o Resumen corto','maxlength' => 100,'required'])!!}
        </div>
    @endif

    <div class="form-group ">
        {!! Form::label('resumenLargo','Resumen de 300 palabras') !!}
        {!! Form::textarea('resumenLargo',null,['class' =>'form-control', 'placeholder' =>'Resumen Largo','maxlength' => 300,'required'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('categoria','Categoria') !!}
        {!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
    </div>

    <div class="form-group">

        {!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('imagen','Subir multiples imagenes') !!}
        {!! Form::file('image[]',['multiple' => 'multiple','accept'=>'image/x-png,image/jpeg'])!!}
    </div>
    <div class="form-group">
        <a class="btn btn-info btn-sm btnimg" role="button"
           href="{{route('proyectos.showimg', $proyect->id)}}" onclick="window.open(this.href, 'mywin',
                                    'left=550,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
            <span>Imágenes <i class="fa fa-eye" aria-hidden="true"></i></span>
        </a>
    </div>


    <div class="form-group">
        {!! Form::submit('Editar', ['class' =>'btn btn-primary']) !!}
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

