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
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>Título</th>
            <th>Contenido</th>
            <th>Categoría</th>
            <th>Autor</th>
            <th>Imagen</th>
            <th>Archivos</th>
            <th>Acciones</th>


            </thead>

            <tbody>
            @foreach ($blogs as $blog)
                @if(Auth::user()->id == $blog->id_usuario)
                    <tr>
                        <td>{{$blog->titulo}}</td>
                        <td>{{substr(strip_tags($blog->descripcion), 0,300)}}...</td>
                        <td>{{$blog->category->name}}</td>
                        <td>{{$blog->users->name}}</td>

                        @if($blog->path==null)
                            <td><img src="{{ url('styleVoltage/images/no-disponible.jpg') }}" style="width: 100px"></td>
                        @else
                            <td><img src="{{asset('images')}}/{{$blog->path}}" style="width: 100px"></td>
                        @endif

                        @if(empty($blog->file))
                            <td>No tiene archivo</td>
                        @else
                            <td><a href="{{asset('download/pdf')}}/{{$blog->file}}"
                                   target="_blank">{{basename($blog->file)}}</a></td>
                        @endif

                        <td><a class="btn btn-success" href="{{route('blogs.edit', $blog->id)}}" role="button"><i
                                        class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger" href="{{route('blogs.destroy', $blog->id)}}"
                               onclick="return confirm('Quiere borrar el registro?')" role="button"><i
                                        class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @elseif(Auth::user()->type == "admin")
                    <tr>
                        <td>{{$blog->titulo}}</td>
                        <td>{{substr(strip_tags($blog->descripcion), 0,300)}}...</td>
                        <td>{{$blog->category->name}}</td>
                        <td>{{$blog->users->name}}</td>

                        @if($blog->path==null)
                            <td><img src="{{ url('styleVoltage/images/no-disponible.jpg') }}" style="width: 100px"></td>
                        @else
                            <td><img src="{{asset('images')}}/{{$blog->path}}" style="width: 100px"></td>
                        @endif

                        @if(empty($blog->file))
                            <td>No tiene archivo</td>
                        @else
                            <td><a href="{{asset('download/pdf')}}/{{$blog->file}}"
                                   target="_blank">{{basename($blog->file)}}</a></td>
                        @endif

                        <td><a class="btn btn-success" href="{{route('blogs.edit', $blog->id)}}" role="button"><i
                                        class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger" href="{{route('blogs.destroy', $blog->id)}}"
                               onclick="return confirm('Quiere borrar el registro?')" role="button"><i
                                        class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    {!! $blogs->render() !!}

@endsection
