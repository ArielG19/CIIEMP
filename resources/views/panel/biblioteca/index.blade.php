@extends('home')
@section('title', 'Listado de archivos que se han subido al repositorio')
@section('contenido')
    <div class="col-xs-12">
        @if(Session::has('message'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif
        <div class="table-responsive">
            <div class="col-xs-12">
                <table class="table table-striped">
                    <thead>
                    <th>Titulo</th>

                    <th>Categoria</th>
                    <th>Autor</th>
                    <th>Imagen</th>
                    <th>Archivo</th>
                    <th>Acciones</th>
                    </thead>
                    <tbody>
                    @foreach ($biblios as $biblio)
                        @if(Auth::user()->id == $biblio->id_usuario)
                            <tr>

                                <td>{{substr(strip_tags($biblio->titulo), 0,100)}}...</td>

                                <td>{{$biblio->category->name}}</td>
                                <td>{{$biblio->users->name}}</td>
                                @if($biblio->image==null)
                                    <td><img src="{{ url('styleVoltage/images/no-disponible.jpg') }}"
                                             style="width: 100px"></td>
                                @else
                                    <td><img src="{{asset('images/biblioteca/')}}/{{$biblio->image}}"
                                             style="width: 60px"></td>
                                @endif
                                @if(empty($biblio->path))
                                    <td>No tiene archivo</td>
                                @else
                                    <td><a href="{{asset('download/pdf')}}/{{$biblio->path}}"
                                           target="_blank">{{basename($biblio->path)}}</a></td>
                                @endif
                                <td><a class="btn btn-success" href="{{route('bibliotecas.edit', $biblio->id)}}"
                                       role="button"><i
                                                class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-danger" href="{{route('bibliotecas.destroy', $biblio->id)}}"
                                       onclick="return confirm('Quiere borrar el archivo?')" role="button"><i
                                                class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @elseif(Auth::user()->type == "admin")
                            <tr>
                                <td>{{$biblio->titulo}}</td>
                                <td>{{$biblio->descripcion}}</td>
                                <td>{{$biblio->category->name}}</td>
                                <td>{{$biblio->users->name}}</td>
                                @if($biblio->image==null)
                                    <td><img src="{{ url('styleVoltage/images/no-disponible.jpg') }}"
                                             style="width: 100px"></td>
                                @else
                                    <td><img src="{{asset('images/biblioteca/')}}/{{$biblio->image}}"
                                             style="width: 60px"></td>
                                @endif
                                @if(empty($biblio->path))
                                    <td>No tiene archivo</td>
                                @else
                                    <td><a href="{{asset('download/pdf')}}/{{$biblio->path}}"
                                           target="_blank">{{basename($biblio->path)}}</a></td>
                                @endif
                                <td><a class="btn btn-success" href="{{route('bibliotecas.edit', $biblio->id)}}"
                                       role="button"><i
                                                class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-danger" href="{{route('bibliotecas.destroy', $biblio->id)}}"
                                       onclick="return confirm('Quiere borrar el archivo?')" role="button"><i
                                                class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <center>{!! $biblios->render() !!}</center>

@endsection
