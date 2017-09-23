@extends('home')
@section('title', 'Listado de archivos que se han subido a la biblioteca digital')
@section('contenido')
@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>

@endif



<table class="table table-striped">
  <thead>
  	<th>Titulo</th>
  	<th>Imagen</th>
  	<th>Responsable</th>
    <th>Objetivo</th>
    <th>Resumen Corto</th>
    <th>Resumen Largo</th>
    <th>Usuario</th>
    <th>Acciones</th>

  </thead>

  <tbody>
  	<tr>

  		@foreach ($proyect as $proyects)
  		<td>{{$proyects->titulo}}</td>
      @if(empty($proyects->imagen))
      <td>No tiene archivo</td>
      @else
      <td><img src="{{asset('images')}}/{{$proyects->imagen}}" style="width:100px"></td>
      @endif
  		<td>{{$proyects->responsable}}</td>
      <td>{{$proyects->objetivo}}</td>
      <td>{{$proyects->resumenCorto}}</td>
      <td>{{$proyects->resumenLargo}}</td>
      
      <td>{{$proyects->users->name}}</td>
     

  		<td><a class="btn btn-success" href="{{route('proyectos.edit', $proyects->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{route('proyectos.destroy', $proyects->id)}}" onclick="return confirm('Quiere borrar el archivo?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $proyect->render() !!}

  @endsection