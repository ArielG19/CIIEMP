@extends('layouts.app')
@section('title','Proyectos')
@section('content')
    <div class="fh5co-blog-style-1">
        <div class="container">
            <div class="row p-b">
                <div class="col-md-8 col-sm-6 col-xs-12 col-xxs-12">
                    <div class="fh5co-post wow fadeInLeft">
                        <div class="fh5co-post-image">
                            <div class="fh5co-overlay"></div>
                            <div class="fh5co-category"><a>{{$proyecto->category->name}}</a></div>
                            @if($proyecto->imagen == null)
                                <img src="{{ url('styleVoltage/images/no-disponible.jpg') }}" class="img-responsive">
                            @else

                                <img src="/images/proyecto/{{$proyecto->imagen}}" alt="Image" class="img-responsive">

                            @endif
                        </div>
                        <div class="fh5co-post-text">
                            <center>
                                <h3><a>{{$proyecto->titulo}}</a></h3><br><br>
                            </center>
                            @if ($proyecto->historia==null)
                            @else
                                <center>
                                    <h4>Historia</h4><br><br>
                                </center>
                                <p>{!!($proyecto->historia)!!}</p>
                            @endif
                            {{--<p>{!!($proyecto->resumenCorto)!!}</p>--}}
                            {{--<hr>--}}
                            <hr>
                            <p>{!!($proyecto->resumenLargo)!!}</p>
                            <hr>

                            <div class="row">
                                <ul class="bxslider">
                                    @foreach($proyecto->proyectoImg as $img)
                                        <li><a class="test-popup-link" href="/images/proyecto/{{$img->image}}"><img
                                                        src="/images/proyecto/{{$img->image}}"></a></li>
                                    @endforeach

                                </ul>

                            </div>


                        </div>

                        <div class="fh5co-post-meta">
                            <a href="#" class="pull-right">
                                <i class="fa fa-calendar"></i>{{Date::parse($proyecto->created_at)->format('j \d\e F \d\e Y')}}
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">

                    <div class="panel panel-default">
                        @if($proyecto->responsable == null)
                            <div class="panel-body text-left">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <center>
                                            <img alt="User Pic" src="/perfil/{{$proyecto->profesor->users->imagen}}"
                                                 width="200" id="profile-image1" class="img-circle img-responsive">

                                        </center>
                                    </div>
                                    <div class="col-md-12">

                                        <h2>{{$proyecto->profesor->primer_nombre}} {{$proyecto->profesor->primer_apellido}}</h2>
                                        <p>{{$proyecto->profesor->profesion1}}</p>
                                        <p>
                                            <a class="remove-decoration"><i
                                                        class="glyphicon glyphicon-envelope"></i> {{$proyecto->profesor->users->email}}
                                            </a> <br>
                                            <a class="remove-decoration"> <i
                                                        class="glyphicon glyphicon-phone"></i> {{$proyecto->profesor->telefono}}
                                            </a> <br>
                                            <a class="remove-decoration"> <i
                                                        class="fa fa-check-square"></i> {{$proyecto->profesor->profesion2}}
                                            </a> <br>
                                            <a class="remove-decoration"> <i
                                                        class="fa fa-check-square"></i> {{$proyecto->profesor->profesion3}}
                                            </a> <br>
                                            <a class="remove-decoration"><i class="fa fa-check-square"
                                                                            aria-hidden="true"></i> {{$proyecto->profesor->profesion4}}
                                            </a>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="panel-body text-left">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <center>
                                            <img alt="User Pic" src="/perfil/default.jpg" width="200"
                                                 class="img-circle img-responsive">

                                        </center>
                                    </div>
                                    <div class="col-md-12">

                                        <h2>{{$proyecto->responsable}}</h2>

                                        <p>
                                            <a class="remove-decoration"> <i class="fa fa-check-square-o" aria-hidden="true"></i> Contacto {{$proyecto->tel}}
                                            </a> <br>


                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div id="IdFooter" class="panel-footer text-center">
                            <h3><span class="label label-primary">Responsable</span></h3>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <script type="text/javascript"
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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



@endsection
