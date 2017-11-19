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
                                <a><i class="fa fa-calendar"
                                      aria-hidden="true"></i>{{Date::parse($noticias->created_at)->format('j \d\e F \d\e Y')}}
                                </a>
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
                                <h3 class="text-center">Tiempo para que finalice el concurso</h3>
                                <div class="col-md-offset-8 col-md-offset-2 hidden-xs hidden-md">
                                    <div class="someTimer "
                                         data-date="{{$noticias->articleEvent->fecha_final}} 23:59:59"
                                         style="width: 455px; height: 120px; padding: 0px; box-sizing: border-box; background-color: #FFFFFF"></div>

                                </div>
                                <div class="col-xs-offset-0 col-xs-offset-12 hidden-md hidden-lg">
                                    <div class="someTimer "
                                         data-date="{{$noticias->articleEvent->fecha_final}} 23:59:59"
                                         style="width: 325px; height: 120px; padding: 0px; box-sizing: border-box; background-color: #FFFFFF"></div>

                                </div>

                                <hr>

                            @endif
                            <h3><a>{{$noticias->titulo}}</a></h3>
                            <p class="parrafo1 img-text">{!!($noticias->descripcion)!!}</p>
                        </div>
                        <div class="row">
                            <ul class="bxslider">
                                @foreach($noticias->articleImg as $img)
                                    <li><a class="test-popup-link" href="/images/noticia/{{$img->image}}"><img
                                                    src="/images/noticia/{{$img->image}}"></a></li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4  hidden-xs hidden-sm">

                    <!-- Fluid width widget -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> 
                                NOTICIAS RECIENTES 
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
                                                    <a href="{{'/articulohome/articulo'}}/{{$recent->slug}}">Ver más</a>
                                                </small>
                                            </h4>
                                            <p>
                                                {{substr(strip_tags($recent->descripcion), 0,150)}}...
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="/articulohome" class="btn btn-primary btn-block">Ver más noticias »</a>
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
                                CONCURSOS RECIENTES
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
                                                    <a href="{{'/articulohome/articulo'}}/{{$event->slug}}">Ver más</a>
                                                </small>
                                            </h4>
                                            <p>
                                                {{substr(strip_tags($event->descripcion), 0,150)}}...
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="/articulohome" class="btn btn-primary btn-block">Ver más concursos »</a>
                        </div>
                    </div>
                    <!-- End fluid width widget -->
                </div>

            </div>


            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-alt"></i> Compartir</h4>
                        </div>
                        <div class="modal-body">
                            <p><a title="Facebook" href=""><span class="fa-stack fa-lg"><i
                                                class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-facebook fa-stack-1x"></i></span></a> <a title="Twitter"
                                                                                                      href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-twitter fa-stack-1x"></i></span></a> <a title="Google+"
                                                                                                     href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-google-plus fa-stack-1x"></i></span></a> <a
                                        title="Linkedin" href=""><span class="fa-stack fa-lg"><i
                                                class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-linkedin fa-stack-1x"></i></span></a> <a title="Reddit"
                                                                                                      href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-reddit fa-stack-1x"></i></span></a> <a title="WordPress"
                                                                                                    href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-wordpress fa-stack-1x"></i></span></a> <a title="Digg"
                                                                                                       href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-digg fa-stack-1x"></i></span></a> <a title="Stumbleupon"
                                                                                                  href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-stumbleupon fa-stack-1x"></i></span></a><a title="E-mail"
                                                                                                        href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-envelope fa-stack-1x"></i></span></a> <a title="Print"
                                                                                                      href=""><span
                                            class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                                class="fa fa-print fa-stack-1x"></i></span></a></p>

                            <h2><i class="fa fa-envelope"></i> Newsletter</h2>

                            <p>Subscribe to our weekly Newsletter and stay tuned.</p>

                            <form action="" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="your@email.com">
                                </div>
                                <br/>
                                <button type="submit" value="sub" name="sub" class="btn btn-primary"><i
                                            class="fa fa-share"></i> Subscribe Now!
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

            </div>

            <script type="text/javascript"
                    src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script type="text/javascript" src={{asset("js/TimeCircles.js")}}></script>
            <script type="text/javascript" src={{asset("js/bxslider.js")}}></script>
            <script type="text/javascript" src={{asset("js/jquery.magnific-popup.js")}}></script>

            <script>
                $('.bxslider').bxSlider({
                    slideWidth: 700,
                    auto: true


                });
            </script>
            <script>
                $('.test-popup-link').magnificPopup({
                    type: 'image'
                    // other options
                });
            </script>
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
