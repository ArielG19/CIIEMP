@extends('home')
@section('title', 'Crear articulo para las noticias')
@section('contenido')

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'noticia.store', 'method' => 'POST','files'=>true]) !!}
    {{csrf_field ()}}

    <div class="col-md-2 pull-right">
        <h4>¿Es un concurso?</h4>
        <div class="onoffswitch">
            <input type="checkbox" name="estado" class="onoffswitch-checkbox" id="myonoffswitch">
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('titulo','Título') !!}
            {!! Form::text('titulo',null,['class' =>'form-control', 'placeholder' =>'Título del artículo','required'])!!}
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('lugar','Lugar') !!}
            {!! Form::text('lugar',null,['class' =>'form-control', 'placeholder' =>'Título del artículo','required'])!!}
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('descripcion','Contenido') !!}
            {!! Form::textarea('descripcion',null,['class' =>'form-control', 'id'=>'textareay', 'placeholder' =>'Contenido del artículo'])!!}
        </div>

        <input name="iagem" type="file" id="upload" class="hidden" onchange="">

    </div>


    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('categoria','Categoria') !!}
            {!! Form::select('id_categoria',$categorias, null,['class' =>'form-control'])!!}
        </div>

    </div>

    <div class="form-group">

        {!! Form::hidden('id_usuario', Auth::user()->id, null,['class' =>'form-control'])!!}
    </div>


    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('imagen','Fecha de Inicio') !!}
            {!! Form::text('fecha_inicio',null,['class' =>'form-control datepicker'])!!}

        </div>
    </div>

    <div class="col-md-4 col-md-offset-1">
        <div class="form-group">
            {!! Form::label('imagen','Fecha de Finalizacion') !!}
            {!! Form::text('fecha_final',null,['class' =>'form-control datepicker'])!!}

        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <a data-toggle="collapse"
               data-parent="#accordion" href="#collapseTwo">
                <button class="btn btn-warning">Subir imagenes</button>
            </a>
        </div>
    </div>

    <div id="collapseTwo" class="panel-collapse collapse col-md-10 ">


        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('imagen','Subir varias imagenes') !!}
                {!! Form::file('image[]',['multiple' => 'multiple'])!!}
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <a data-toggle="collapse"
               data-parent="#accordion" href="#collapseTree">
                <button class="btn btn-warning">Subir un archivo</button>
            </a>
        </div>
    </div>



    <div id="collapseTree" class="panel-collapse collapse col-md-10 ">


    </div>



    <div class="col-md-12">
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}
        </div>
    </div>


    {!! Form::close() !!}



@endsection
