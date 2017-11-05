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

                                <img src="/images/{{$proyecto->imagen}}" alt="Image" class="img-responsive">

                            @endif
                        </div>
                        <div class="fh5co-post-text">
                            <h3><a>{{$proyecto->titulo}}</a></h3>
                            @if ($proyecto->historia==null)
                            @else
                                <p>{!!($proyecto->historia)!!}</p>
                            @endif
                            <p>{!!($proyecto->resumenCorto)!!}</p>
                            <hr>
                            <p>{!!($proyecto->resumenLargo)!!}</p>
                            <hr>

                            <div class="row">
                                <ul class="bxslider">
                                    @foreach($proyecto->proyectoImg as $img)
                                        <li><a class="test-popup-link" href="/images/proyecto/{{$img->image}}"><img src="/images/proyecto/{{$img->image}}" ></a></li>
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

                <div class="col-md-4">

                    <div class="panel panel-default">

                        <div class="panel-body text-left">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <center>
                                        <img alt="User Pic" src="/perfil/{{$proyecto->users->imagen}}" width="200" id="profile-image1" class="img-circle img-responsive">

                                    </center>
                                </div>
                                <div class="col-md-12">

                                    <h2>{{$proyecto->profesor->primer_nombre}} {{$proyecto->profesor->primer_apellido}}</h2>
                                    <p>{{$proyecto->profesor->profesion1}}</p>
                                    <p>
                                        <a  class="remove-decoration"><i class="glyphicon glyphicon-envelope"></i> david@gmail.com</a> <br>
                                        <a  target="_blank" class="remove-decoration"><i class="glyphicon glyphicon-globe"></i> www.sachitha-seram.branded.me </a><br>
                                        <a  class="remove-decoration"> <i class="glyphicon glyphicon-phone"></i> {{$proyecto->profesor->telefono}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
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
