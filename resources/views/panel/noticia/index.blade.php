@extends('home')
@section('title', 'Listado de entradas de blog')
@section('contenido')
    @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>


    @endif



    <table class="table table-striped">
        <thead>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Lugar</th>
        <th>Autor</th>
        <th>Categoria</th>
        <th>Concurso</th>
        <th>Empieza</th>
        <th>Finaliza</th>
        <th>Imagen</th>
        <th>Acciones</th>
        </thead>

        <tbody>
        <tr>

            @foreach ($noticias as $noticia)
                <td>{{$noticia->titulo}}</td>
                <td>{{substr(strip_tags($noticia->descripcion), 0,300)}}...</td>
                <td>{{$noticia->lugar}}</td>
                <td>{{$noticia->users->name}}</td>
                <td>{{$noticia->category->name}}</td>
                @if(isset($noticia->articleEvent))
                    <td ><a><i class="fa fa-star" aria-hidden="true"></i></a></td>
                    <td>{{$noticia->articleEvent->fecha_inicio}}</td>
                    <td>{{$noticia->articleEvent->fecha_final}}</td>
                @else
                    <td></td>
                    <td></td>
                    <td></td>
                @endif
                <td>
                    <a class="btn btn-info btn-sm" href="" data-id="{{$noticia->id}}" data-toggle='modal'
                       data-target="#modalimg">
                        <span>Img <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                    </a>
                </td>



                <td><a class="btn btn-success" href="{{route('noticia.edit', $noticia->id)}}" role="button"><i
                                class="fa fa-pencil-square-o"></i></a>
                    <a class="btn btn-danger" href="{{route('noticias.destroy', $noticia->id)}}"
                       onclick="return confirm('Quiere borrar el registro?')" role="button"><i
                                class="fa fa-trash-o"></i></a>
                </td>

        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $noticias->render() !!}

    @include('noticia.modalimg')

@endsection
