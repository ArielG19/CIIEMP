@extends('layouts.app')
@section('title','Noticias recientes')
@section('content')
    <div class="fh5co-blog-style-1">
        <div class="container">
            <h2>ÚLTIMAS NOTICIAS</h2>
            <hr>


                <div class="row p-b">
                    @foreach($noticias as $noticia)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-6">

                            <div class="fh5co-post wow fadeInLeft">
                                <div class="fh5co-post-image">
                                    <div class="fh5co-overlay"></div>
                                    <div class="fh5co-category">
                                        <a href="">
                                            {{$noticia->category->name}}
                                        </a></div>
                                    @if(isset($noticia->articleImg[0]))
                                        <img src="/images/noticia/{{$noticia->articleImg[0]->image}}"
                                             alt="Image" class="img-responsive">
                                    @else
                                        <img src="{{ url('styleVoltage/images/no-disponible.jpg') }}"
                                             class="img-responsive">
                                    @endif
                                </div>
                                <div class="fh5co-post-text prueba">
                                    <h3>
                                        <a href="{{'/articulohome/articulo'}}/{{$noticia->slug}}">{{$noticia->titulo}}</a>
                                    </h3>
                                    <p>{{substr(strip_tags($noticia->descripcion), 0,150)}}...</p>
                                </div>
                                <div class="fh5co-post-meta prueba2">
                                    @if(is_null($noticia->articleEvent))
                                    @else
                                        <a><i class="fa fa-star" aria-hidden="true"></i>Concurso</a>
                                    @endif
                                    <a><i class="fa fa-calendar"
                                          aria-hidden="true"></i>{{Date::parse($noticia->created_at)->format('Y-m-d')}}
                                    </a>
                                    @if(is_null($noticia->articleEvent))
                                    @else
                                        <a><i class="fa fa-calendar"
                                              aria-hidden="true"></i>Finaliza {{Date::parse($noticia->articleEvent->fecha_final)->format('Y-m-d')}}
                                        </a>
                                    @endif
                                    <a><i class="fa fa-map-marker" aria-hidden="true"></i>{{$noticia->lugar}}</a>
                                    <a href="#"><i class="icon-user" aria-hidden="true"></i>{{$noticia->users->name}}
                                    </a>
                                
                                </div>

                            </div>

                        </div>
                    @endforeach()
                </div>
                <!-- Button trigger modal -->

            {!! $noticias->render()!!}

        </div>
    </div>


@endsection
