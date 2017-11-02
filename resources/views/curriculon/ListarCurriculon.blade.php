<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Curriculum vitae</title>
    <link type="text/css" rel="stylesheet" href="/curriculon_css/css/red.css" />
    <link type="text/css" rel="stylesheet" href="/font-awesome/css/font-awesome.css"/>

    </head>
    <body>
        <div id="wrapper">
              <div class="wrapper-top"></div>
              <div class="wrapper-mid">
                  <!-- Begin Paper -->
                  <div id="paper">
                        <div class="paper-top"></div>
                        @foreach($curriculon as $c)
                        <div id="paper-mid">
                                <div class="entry">
                                      <!-- Begin Image -->
                                      <img class="portrait" src="/perfil/{{$c->imagen}}"/>
                                      <!-- End Image -->

                                      <!-- Begin Personal Information -->
                                      <div class="self">
                                              <h1 class="name">{{$c->primer_nombre}} {{$c->primer_apellido}}</h1>
                                              <br>

                                              <ul>
                                                <li><i class="fa fa-user"></i> {{$c->primer_nombre}} {{$c->segundo_nombre}} {{$c->primer_apellido}} {{$c->segundo_apellido}}</li>
                                                <li><i class="fa fa-check-square-o"> {{$c->estado_civil}}</i></li>
                                                <li><i class="fa fa-globe"></i> {{$c->nacionalidad}}</li>
                                                <li><i class="fa fa-home"></i> {{$c->direccion}}</li>
                                                <li><i class="fa fa-phone"></i> {{$c->telefono}}</li>
                                                <li><i class="fa fa-envelope-o"></i> {{$c->email}}</li>                                               
                                              </ul>
                                      </div>
                                      <!-- End Personal Information -->
                                </div>

                                <!-- Begin 1st Row -->
                                <div class="entry">
                                  <h2>Resumen</h2>
                                  <p>{!!$c->resumen!!}</p>
                                </div>
                                <!-- End 1st Row -->

                                <!-- Begin 2nd Row -->
                                <div class="entry">
                                    <h2>Titulos academicos</h2>
                                    <div class="content">
                                      <p>{!!$c->titulos_academicos!!}</p>
                                    </div>
                                  
                                </div>

                                <div class="entry">
                                    <h2>Estudios doctorales</h2>
                                    <div class="content">
                                      <p>{!!$c->estudios_doctorales!!}</p>
                                    </div>
                                  
                                </div>
                                <!-- End 2nd Row -->

                                <!-- Begin 3rd Row -->
                                <div class="entry">
                                  <h2>Experiencia Laboral</h2>
                                  <div class="content">
                                    <ul class="info">
                                      <li>{!!$c->experiencia_laboral!!}</li>
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
    </body>
</html>