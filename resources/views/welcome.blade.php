@extends('layouts.app')
@section('title','Inicio')
@section('content')
    <div>
        <div>
            <div class="col-md-12">
            <div class="container">
            {{--Aqui comienza el boton para el tutorial--}}
                <div class="row">
                    <div class="col-sm-12">
                        <hr>
                        <div class="text-center wow fadeInUp" style="margin-right:-40px;">
                            <a href='#myModal' class='btn btn-outline-warning btn-lg' data-toggle='modal' data-target='#playerModal'>
                                Sigue Nuestro Tutorial
                            </a>
                        </div>
                        <hr>
                            <div class="modal fade" id='playerModal' role='dialog' tabindex='-1'>
                                <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" aria-label='Close' data-dismiss='modal', type='button'>
                                                <span aria-hidden='true'>×</span></button>
                                                <h4 class="modal-title">Aprende a utilizar nuestra Plataforma Web</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <div id="player" class="embed-responsive-item"></div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-default" data-dismiss='modal' type='button'>
                                                    Cerrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Youtube API Functions (https://developers.google.com/youtube/iframe_api_reference)
                        // =============================================

                        var tag = document.createElement('script');

                        tag.src = "https://www.youtube.com/iframe_api";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                        //### Variables
                        var player;
                        var playerModal = $('#playerModal');

                        //### Youtube API
                        function onYouTubeIframeAPIReady() {
                            player = new YT.Player('player', {
                                height: '390',
                                width: '640',
                                videoId: 'L2Ew6JzfZC8'
                            });
                        }

                        //### Modal Controls (http://getbootstrap.com/javascript/#modals)
                        // Modal when show, begin to play video
                        playerModal.on('show.bs.modal', function (e) {
                            player.playVideo();
                        });

                        // Modal when hidden, pause or stop playing video
                        playerModal.on('hidden.bs.modal', function (e) {
                            player.pauseVideo();
                            //player.stopVideo();
                        });
                    </script>

                {{--Aqui termina el codigo del tutorial--}}

                {{--CONTENIDO modulos--}}
                <div class="fh5co-blog-style-1">
                    <div class="container">

                        <section class="work-info">
                            <div class="container">
                                {{--Aqui las letras cambiaron su diseño--}}
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <div class="cuerpo text-center">
                                        <h1 class="titulo">
                                        <div class="wow fadeInLeft">CIIEMP</div><div class="wow fadeInRight">Módulos</div>
                                        </h1>
                                        <p class="wow fadeInUp delay-1 parrafo">CIIEMP cuenta con dos módulos,
                                          uno de ellos es el observatorio socioeconómico  y el otro es una bolsa de empleo.</p>
                                    </div>
                                    <style>

                                        .work-info{
                                            margin-top:-50px;
                                        }
                                        .cuerpo {
                                        height: 100%;
                                        font-family: 'Varela Round' sans-serif;
                                        text-align: center;
                                        }

                                        .titulo {
                                        margin-top: 5%;
                                        font-size: 3rem;
                                        display: inline-block;
                                        }
                                        .titulo div {
                                        position: relative;
                                        float: left;
                                        font-size:40px;
                                        }
                                        .titulo div:first-child {
                                        color: #3498db;
                                        margin-right: 1rem;
                                        }

                                        .parrafo {
                                        font-size: 1.2rem;
                                        color: gray;
                                        text-transform: uppercase;
                                        }

                                        .delay-1 {
                                        -moz-animation-delay: 1s;
                                        -webkit-animation-delay: 1s;
                                        animation-delay: 1s;
                                        }
                                    </style>

                                </div>
                                {{--Aqui termina el codigo de las nuevas letras--}}
                                <div class="row">
                                    <div class=" col-md-6 col-sm-12">
                                        <div class="work-item fh5co-post wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                                            <a href="#">
                                            <img src="styleVoltage/images/socieconomico.png" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="fh5co-post-text text-center">
                                            <h3><a href="#">Observatorio Socioeconómico</a></h3>
                                            <p>El Observatorio Socioeconómico de CIIEMP es un instrumento de seguimiento y monitorización de los
                                              principales indicadores socioeconómicos a nivel Departamental.</p>
                                        </div>
                                    </div>

                                <div class="col-md-6 col-sm-12 ">
                                    <div class="work-item fh5co-post wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                                        <a href="#">
                                        <img src="styleVoltage/images/bolsadeempleo.png" class="img-responsive">
                                        </a>
                                    </div>
                                      <div class="fh5co-post-text text-center">
                                            <h3><a href="#">Bolsa de Empleo</a></h3>
                                            <p>En CIIEMP queremos ayudarte a que encuentres tu próximo empleo,
                                              por eso desde aquí puedes acceder a las mejores ofertas de trabajo que hay en Nicaragua, clasificadas por área.</p>
                                        </div>
                                </div>
                                </div><!--end of row-->
                            </div><!--end of container-->
                        </section>
                        <!--end of work section-->
                        <style>
                            .img-responsive
                        {
                            width: 100%; <!-- important-->
                        }

                        .blanco{
                            color:white;
                        }

                        .work-item{
                            margin-bottom: 15px;
                            overflow: hidden;
                        }
                        .work-info{
                           padding:50px 0px;
                           background-color: #fff;

                        }
                        .work-item a
                        {
                            display: block;
                            overflow: hidden;
                        }

                        .work-item a img{
                            margin: 0 auto;
                        }
                        .work-item>a>img:hover{
                            transform: scale(1.2,1.2);

                        }

                        a:link {text-decoration:none;color:#999999;}
                        a:visited {text-decoration:none;color:#999999;}
                        a:active {text-decoration:none;color:#ff0000;}
                        a:hover {text-decoration:none;color:#F2C22F;}

                        </style>

                    </div>
                </div>
                {{--Fin modulos--}}

                {{--CONTENIDO Proyectos--}}


                {{--Fin Proyectos--}}

                {{--CONTENIDO noticias--}}

                <div class="fh5co-content-style-6">
                    <div class="container">
                        <div id="noticias" class="row p-b text-center">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">ÚLTIMAS NOTICIAS.</h2>

                            </div>
                        </div>
                        <div class="row ">
                            @foreach($recents as $recent)
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft"
                                     data-wow-duration="1s"
                                     data-wow-delay=".5s">
                                    <a href="{{'/articulohome/articulo'}}/{{$recent->slug}}" class="link-block">
                                        <figure>
                                            @if(isset($recent->articleImg[0]))
                                                <img src="/images/noticia/{{$recent->articleImg[0]->image}}"
                                                     alt="Image" class="img-responsive">
                                            @else
                                                <img src="{{ url('styleVoltage/images/no-disponible.jpg') }}"
                                                     class="img-responsive">
                                            @endif
                                        </figure>

                                        <div class="col-md-12 prueba">
                                            <h3>{{$recent->titulo}}</h3>
                                            <p>{{substr(strip_tags($recent->descripcion), 0,150)}}...</p>
                                        </div>


                                        <p><a href="{{'/articulohome/articulo'}}/{{$recent->slug}}" class="btn btn-primary btn-sm">Leer más</a></p>


                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    {{--FIN CONTENIDO--}}

                </div>
            </div>
        </div>
    </div>
@endsection
