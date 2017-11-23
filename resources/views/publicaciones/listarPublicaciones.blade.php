<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Publicaciones</title>
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
                        @foreach($publicaciones as $p)
                          <div id="paper-mid">
                                <div class="entry">
                                      <img class="portrait" src="/perfil/{{$p->imagen}}"/>
                                      <div class="self">
                                              <h2 class="name">{{$p->primer_nombre}} {{$p->primer_apellido}}</h2>
                                              <br>
                                      </div>
                                </div>
                                  <div class="entry">
                                      <h2>Publicaciones</h2>
                                      <div class="content">
                                        <ul class="info">
                                          {!!$p->publicacion!!}
                                          
                                        </ul>
                                      </div>
                                  </div>
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