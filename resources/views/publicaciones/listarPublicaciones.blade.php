@extends('layouts.appDocente')
@section('title','Publicaciones')
@section('contenido')
       <div id="wrapper">
              <div class="wrapper-top"></div>
              <div class="wrapper-mid">
                  <!-- Begin Paper -->
                  <div id="paper">
                        <div class="paper-top"></div>
                        @foreach($publicaciones as $p)
                        <div id="paper-mid">
                                <div class="entry">
                                      <!-- Begin Image -->
                                      <img class="portrait" src="/perfil/{{$p->imagen}}"/>
                                      <!-- End Image -->

                                      <!-- Begin Personal Information -->
                                      <div class="self">
                                              <h1 class="name">{{$p->primer_nombre}} {{$p->primer_apellido}}</h1>
                                              <br>

                                             
                                      </div>
                                      <!-- End Personal Information -->
                                </div>

                                <!-- Begin 3rd Row -->
                                <div class="entry">
                                  <h2>Publicaciones</h2>
                                  <div class="content">
                                    <ul class="info">
                                      <li><b>{{$p->publicado_en}}</b>
                                      <br>
                                      {{$p->primer_apellido}},{{$p->primer_nombre}},{{$p->colaboradores}}
                                      ({{date('Y', strtotime($p->fecha))}}).{{$p->titulo_trabajo}} 
                                       <br>
                                       Disponible en:<a href="">{{$p->link}}</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- End 3rd Row -->
                        </div>
                        @endforeach
                        <div class="clear"></div>
                      <div class="paper-bottom"></div>
                  </div>
                  <!-- End Paper -->
              </div>
              <div class="wrapper-bottom"></div>
        </div>

@endsection