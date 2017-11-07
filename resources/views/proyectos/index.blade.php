@extends('home')
@section('title', 'Listado de archivos que se han subido a la biblioteca digital')
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
        <th>Imagen</th>
        <th id="tdresponsable">Responsable</th>
        <th id="tdotro">Otro</th>
        <th>Historia</th>
        <th>Resumen Largo</th>
        <th>Acciones</th>

        </thead>

        <tbody>
        <tr>

            @foreach ($proyect as $proyects)
                <td>{{$proyects->titulo}}</td>
                @if(empty($proyects->imagen))
                    <td>No tiene archivo</td>
                @else
                    <td><img src="{{asset('images/proyecto')}}/{{$proyects->imagen}}" style="width:100px"></td>
                @endif
                @if(empty($proyects->profesor->primer_nombre))
                    <td></td>
                @else
                    <td>{{$proyects->profesor->primer_nombre}} {{$proyects->profesor->primer_apellido}}</td>
                @endif
                @if(empty($proyects->responsable))
                    <td></td>
                @else
                    <td>{{$proyects->responsable}}</td>
                @endif
                <td>{{$proyects->historia}}</td>
                <td>{{$proyects->resumenLargo}}</td>


                <td><a class="btn btn-success" href="{{route('proyectos.edit', $proyects->id)}}" role="button"><i
                                class="fa fa-pencil-square-o"></i></a>
                    <a class="btn btn-danger" href="{{route('proyectos.destroy', $proyects->id)}}"
                       onclick="return confirm('Quiere borrar el archivo?')" role="button"><i class="fa fa-trash-o"></i></a>
                </td>

        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $proyect->render() !!}

@endsection