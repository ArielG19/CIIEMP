@extends('home')
@section('title', 'Editar entradas de blog')
@section('contenido')


<<<<<<< HEAD
=======
<<<<<<< HEAD
{!!Form::model($blog,['route'=>['noticia.update',$blog],'method'=>'PUT','files' => true])!!}

	    <div class="form-group">
			{!!Form::label('titulo','Titulo:')!!}
			{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa el título'])!!}
		</div>

		<div class="form-group">
					{!! Form::label('descripcion','Contenido') !!}
					{!! Form::textarea('descripcion',null,['class' =>'form-control','id'=>'textareay', 'placeholder' =>'Contenido'])!!}
		</div>

		<div class="form-group">
					{!! Form::label('usuario','Usuario') !!}
					{!! Form::select('id_usuario',$users, null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
					{!! Form::label('categoria','Categoria') !!}
					{!! Form:: select('id_categoria',$categorias, null,['class'=>'form-control']) !!}
		</div>

			@if(empty($blog->path))
 			  <img src="{{asset('images')}}/no-imagen.jpg" alt="" style="width:100px;"/>
 			 @else
 			 <img src="{{asset('images')}}/{{$blog->path}}" alt="" style="width:100px;"/>
 			 @endif

		<div class="form-group">
					{!!Form::label('imagen','Imagen:')!!}
					{!!Form::file('path')!!}
		</div>




	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}<br>
=======
>>>>>>> 53212f1e893b5ba1968feabf46ee055168198fa7
    {!!Form::model($noticia,['route'=>['noticia.update',$noticia],'method'=>'PUT','files' => true])!!}
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

        @if(isset($noticia->articleImg))
            @foreach($noticia->articleImg as $img)
                <div class="col-md-2 col-ms-3 col-xs-4">
                    <img src="/images/noticia/{{$img->image}}"
                         alt="Image" class="img-responsive" style="width:100px;">
                </div>
            @endforeach
        @else
            <img src="{{asset('images')}}/no-imagen.jpg" alt="" style="width:100px;"/>
        @endif


        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('imagen','Subir imagenes') !!}
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

<<<<<<< HEAD
=======
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
>>>>>>> 53212f1e893b5ba1968feabf46ee055168198fa7
@endsection
