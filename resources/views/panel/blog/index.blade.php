@extends('home')
@section('title', 'Listado de entradas de blog')
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
  	<th>Contenido</th>
  	<th>Autor</th>
  	<th>Categoria</th>
    <th>Imagen</th>
    <th>Acciones</th>




  </thead>

  <tbody>
  	<tr>

  		@foreach ($blogs as $blog)
  		<td>{{$blog->titulo}}</td>
  		<td>{{$blog->descripcion}}</td>
      <td>{{$blog->category->name}}</td>
      <td>{{$blog->users->name}}</td>



      @if(empty($blog->path))
      <td><img src="{{asset('images')}}/no-imagen.png"  style ="width: 100px"></td>
      @else
      <td><img src="{{asset('images')}}/{{$blog->path}}"  style ="width: 100px"></td>
      @endif

  		<td><a class="btn btn-success" href="{{route('blogs.edit', $blog->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{route('blogs.destroy', $blog->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $blogs->render() !!}

  @endsection
