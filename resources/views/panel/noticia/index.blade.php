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
<<<<<<< HEAD
=======
    <th>Lugar</th>
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
  	<th>Autor</th>
  	<th>Categoria</th>
    <th>Imagen</th>
    <th>Acciones</th>




  </thead>

  <tbody>
  	<tr>

<<<<<<< HEAD
  		@foreach ($blogs as $blog)
  		<td>{{$blog->titulo}}</td>
  		<td>{{substr(strip_tags($blog->descripcion), 0,300)}}...</td>
      <td>{{$blog->category->name}}</td>
      <td>{{$blog->users->name}}</td>



      @if(empty($blog->path))
      <td><img src="{{asset('images')}}/no-imagen.png"  style ="width: 100px"></td>
      @else
      <td><img src="{{asset('images')}}/{{$blog->path}}"  style ="width: 100px"></td>
      @endif
    {{--
  		<td><a class="btn btn-success" href="{{route('blogs.edit', $blog->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{route('blogs.destroy', $blog->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>
      --}}
=======
  		@foreach ($noticias as $noticia)
  		<td>{{$noticia->titulo}}</td>
  		<td>{{substr(strip_tags($noticia->descripcion), 0,300)}}...</td>
      <td>{{$noticia->lugar}}</td>
      <td>{{$noticia->users->name}}</td>
      <td>{{$noticia->category->name}}</td>




      @if(empty($noticia->image1))
      <td><img src="{{asset('styleVoltage/images')}}/no-disponible.jpg"  style ="width: 100px"></td>
      @else
      <td><img src="{{asset('images/noticia')}}/{{$noticia->image1}}"  style ="width: 100px"></td>
      @endif

  		<td><a class="btn btn-success" href="{{route('noticia.edit', $noticia->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{route('noticias.destroy', $noticia->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
  	</tr>
  	@endforeach
  </tbody>
</table>

<<<<<<< HEAD
{!! $blogs->render() !!}
=======
{!! $noticias->render() !!}
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47

  @endsection
