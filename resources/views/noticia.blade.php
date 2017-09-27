@extends('layouts.app')
@section('title','articulo')
@section('content')
    <div class="fh5co-blog-style-1">
        <div class="container">
            <div class="row p-b">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="fh5co-post wow fadeInLeft">
                        <div class="fh5co-post-image">
                            <div class="fh5co-overlay"></div>
                            <div class="fh5co-category"><a>{{$noticias->category->name}}</a></div>

                            @if(isset($noticias->articleImg[0]))
                                <img src="/images/noticia/{{$noticias->articleImg[0]->image}}"
                                     alt="Image" class="img-responsive">
                            @else
                                <img src="{{ url('styleVoltage/images/no-disponible.jpg') }}"
                                     class="img-responsive">
                            @endif
                        </div>
                        <div class="fh5co-post-meta">
                            @if(is_null($noticias->articleEvent))
                            @else
                                <a><i class="fa fa-star" aria-hidden="true"></i> Concurso</a>
                            @endif
                            {{--@if(is_null($noticias->articleEvent))--}}
                                {{--<a><i class="fa fa-calendar"--}}
                                      {{--aria-hidden="true"></i>{{Date::parse($noticias->created_at)->format('Y-m-d')}}</a>--}}
                            {{--@else--}}
                                    {{--<a><i class="fa fa-calendar"--}}
                                          {{--aria-hidden="true"></i>Fecha de publicacion {{Date::parse($noticias->created_at)->format('Y-m-d')}}</a>--}}
                            {{--@endif--}}
                            @if(is_null($noticias->articleEvent))
                            @else
                                <a><i class="fa fa-calendar"
                                      aria-hidden="true"></i>Inicia {{Date::parse($noticias->articleEvent->fecha_inicio)->format('Y-m-d')}}
                                </a>
                                <a><i class="fa fa-calendar"

                                      aria-hidden="true"></i>Finaliza {{Date::parse($noticias->articleEvent->fecha_final)->format('Y-m-d')}}
                                </a>
                            @endif
                            <a><i class="fa fa-map-marker" aria-hidden="true"></i>{{$noticias->lugar}}</a>
                            <a><i class="icon-user" aria-hidden="true"></i>{{$noticias->users->name}}</a>
                            <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-share-alt"
                                                                                      aria-hidden="true"></i>Compartir</a>
                            <hr>

                        </div>
                        <div>

                        </div>
                        <div class="fh5co-post-text">
                            @if(is_null($noticias->articleEvent))

                            @else
                                <h3 class="text-center">Tiempo para que finalize el concurso</h3>
                                <div class="col-md-offset-8 col-md-offset-2">
                                    <div class="someTimer " data-date="{{$noticias->articleEvent->fecha_final}}"
                                         style="width: 455px; height: 120px; padding: 0px; box-sizing: border-box; background-color: #FFFFFF"></div>

                                </div>
                                <hr>

                            @endif
                            <h3><a>{{$noticias->titulo}}</a></h3>
                            <p class="parrafo1 img-text">{!!($noticias->descripcion)!!}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4  hidden-xs hidden-sm">

                    <!-- Fluid width widget -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> 
                                Noticias recientes
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul class="media-list">
                                @foreach($recents as $recent)
                                    <li class="media">

                                        <div class="media-left">

                                            @if(isset($recent->articleImg[0]))
                                                <img width="60px" height="60px" class="img-circle"
                                                     src="/images/noticia/{{$recent->articleImg[0]->image}}"
                                                     alt="Image"
                                                     class="img-responsive">

                                            @else
                                                <a href="#"><img src="{{ url('styleVoltage/images/no-disponible.jpg')}}"
                                                                 width="60px" height="60px" class="img-circle"></a>

                                            @endif
                                        </div>
                                        <div class="media-body">

                                            <h4 class="media-heading">
                                                {{$recent->titulo}}
                                                <br>
                                                <small>
                                                    <a href="{{'/articulohome/articulo'}}/{{$recent->slug}}">ver mas</a>
                                                </small>
                                            </h4>
                                            <p>
                                                {{substr(strip_tags($recent->descripcion), 0,150)}}...
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="/articulohome" class="btn btn-primary btn-block">Ver mas noticias »</a>
                        </div>
                    </div>
                    <!-- End fluid width widget -->
                </div>
                <div class="col-md-4  hidden-xs hidden-sm">

                    <!-- Fluid width widget Event-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                Concursos activos
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul class="media-list">
                                @foreach($events as $event)
                                    <li class="media">

                                        <div class="media-left">

                                            @if(isset($event->articleImg[0]))
                                                <img width="60px" height="60px" class="img-circle"
                                                     src="/images/noticia/{{$event->articleImg[0]->image}}"
                                                     alt="Image"
                                                     class="img-responsive">


                                            @else
                                                <a href="#"><img src="{{ url('styleVoltage/images/no-disponible.jpg')}}"
                                                                 width="60px" height="60px" class="img-circle"></a>


                                            @endif
                                        </div>
                                        <div class="media-body">

                                            <h4 class="media-heading">
                                                {{$event->titulo}}
                                                <br>
                                                <small>
                                                    <a href="{{'/articulohome/articulo'}}/{{$event->slug}}">ver mas</a>
                                                </small>
                                            </h4>
                                            <p>
                                                {{substr(strip_tags($event->descripcion), 0,150)}}...
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="/articulohome" class="btn btn-primary btn-block">Ver mas concursos »</a>
                        </div>
                    </div>
                    <!-- End fluid width widget -->
                </div>

            </div>


            {{--<div class="row">--}}
            {{--<div class='list-group gallery'>--}}
            {{--<div class='col-sm-4 col-xs-6 col-md-2 col-lg-2'>--}}
            {{--<a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">--}}
            {{--<img class="img-responsive" alt="" src="http://placehold.it/320x320"/>--}}
            {{--<div class='text-right'>--}}
            {{--<small class='text-muted'>Image Title</small>--}}
            {{--</div> <!-- text-right / end -->--}}
            {{--</a>--}}
            {{--</div> <!-- col-6 / end -->--}}
            {{--<div class='col-sm-4 col-xs-6 col-md-2 col-lg-2'>--}}
            {{--<a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">--}}
            {{--<img class="img-responsive" alt="" src="http://placehold.it/320x320"/>--}}
            {{--<div class='text-right'>--}}
            {{--<small class='text-muted'>Image Title</small>--}}
            {{--</div> <!-- text-right / end -->--}}
            {{--</a>--}}
            {{--</div> <!-- col-6 / end -->--}}
            {{--<div class='col-sm-4 col-xs-6 col-md-2 col-lg-2'>--}}
            {{--<a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">--}}
            {{--<img class="img-responsive" alt="" src="http://placehold.it/320x320"/>--}}
            {{--<div class='text-right'>--}}
            {{--<small class='text-muted'>Image Title</small>--}}
            {{--</div> <!-- text-right / end -->--}}
            {{--</a>--}}
            {{--</div> <!-- col-6 / end -->--}}

            {{--<div class='col-sm-4 col-xs-6 col-md-2 col-lg-2'>--}}
            {{--<a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">--}}
            {{--<img class="img-responsive" alt="" src="http://placehold.it/320x320"/>--}}
            {{--<div class='text-right'>--}}
            {{--<small class='text-muted'>Image Title</small>--}}
            {{--</div> <!-- text-right / end -->--}}
            {{--</a>--}}
            {{--</div> <!-- col-6 / end -->--}}
            {{--</div>--}}

            {{--</div>--}}
            <div class="row">

            </div>

            <script type="text/javascript"
                    src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script type="text/javascript" src={{asset("js/TimeCircles.js")}}></script>
            <script>
                var timeCircles = $(".someTimer").TimeCircles();

                // Fade in and fade out are examples of how chaining can be done with TimeCircles
                $(".fadeIn").click(function () {
                    timeCircles.elements.last().fadeIn();
                });
                $(".fadeOut").click(function () {
                    timeCircles.elements.last().fadeOut();
                });

                // Start and stop are methods applied on the public TimeCircles instance
                $(".startTimer").click(function () {
                    $(".someTimer").eq(1).TimeCircles().start();
                });
                $(".stopTimer").click(function () {
                    $(".someTimer").eq(1).TimeCircles().stop();
                });

            </script>


        </div>
    </div>


@endsection
