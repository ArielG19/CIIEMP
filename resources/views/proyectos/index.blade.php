@extends('home')
@section('title', 'Listado de proyectos')
@section('contenido')
    @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>

    @endif

    <div class="col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <th>Tipo de proyecto</th>
                <th>Título</th>
                <th>Img de Cabecera</th>
                <th id="tdresponsable">Responsable</th>
                <th id="tdotro">Otro</th>
                <th>Historia</th>
                <th>Resumen Largo</th>
                <th>Contacto</th>
                <th>Imágenes</th>
                <th>Acciones</th>

                </thead>

                <tbody>
                <tr>

                    @foreach ($proyect as $proyects)
                        @if($proyects->tipo == 'estudiante')
                            <td>Estudiante</td>
                        @else
                            <td>Egresado</td>
                        @endif

                        <td>{{$proyects->titulo}}</td>
                        @if(empty($proyects->imagen))
                            <td>No tiene archivo</td>
                        @else
                            <td><img src="{{asset('images/proyecto')}}/{{$proyects->imagen}}" style="width:100px">
                            </td>
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

                          <td class="col-md hidden-xs">{{substr(strip_tags($proyects->historia), 0,150)}}...</td>
                          <td class="col-md hidden-xs">{{substr(strip_tags($proyects->resumenLargo), 0,150)}}...</td>


                          <td class="col-xs hidden-lg">{{substr(strip_tags($proyects->historia), 0,50)}}...</td>
                          <td class="col-xs hidden-lg" >{{substr(strip_tags($proyects->resumenLargo), 0,50)}}...</td>



                        <td>{{$proyects->tel}}</td>
                        @if(isset($proyects->proyectoImg[0]))
                            <td>
                                <a class="btn btn-info btn-sm btnimg" role="button"
                                   href="{{route('proyectos.showimg', $proyects->id)}}" onclick="window.open(this.href, 'mywin',
                                    'left=550,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                                    <span>Imágenes <i class="fa fa-eye" aria-hidden="true"></i></span>
                                </a>
                            </td>
                        @else
                            <td><img src="{{ url('styleVoltage/images/no-disponible.jpg') }}" style="width: 100px"></td>
                        @endif


                        <td><a class="btn btn-success" href="{{route('proyectos.edit', $proyects->id)}}"
                               role="button"><i
                                        class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger" href="{{route('proyectos.destroy', $proyects->id)}}"
                               onclick="return confirm('Quiere borrar el archivo?')" role="button"><i
                                        class="fa fa-trash-o"></i></a>
                        </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <center>{!! $proyect->render()!!}</center>

@endsection
