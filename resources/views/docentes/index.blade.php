@extends('layouts.app')
@section('title','Entradas recientes')
 @section('script')
    <script type="text/javascript" src="{{asset('/js/docenteModal.js')}}"></script>

  @endsection
@section('content')
    <h2 class="fh5co-heading wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".5s">Docentes Investigadores</h2>

  <div class=" container">
        <div class= "fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            @foreach($user as $u)
              <div class="col-md-4">
                  <div class="span3 well">
                      <center>
                          <a href="#" Onclick='Mostrar({{$u->id_usuario}});' data-toggle="modal" data-target="#myModal">
                            <img src="perfil/{{$u->imagen}}" name="aboutme" width="140" height="140" class="img-circle">
                          </a>
                            <h3>{{$u->primer_nombre}}</h3>
                          <em>click en la imagen para más detalles</em>
                      </center>
                  </div>
              </div> 
            @endforeach
        </div>
  </div>
  @include('docentes.modal')


@endsection
