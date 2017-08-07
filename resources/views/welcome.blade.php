<<<<<<< HEAD
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
=======
@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{--CONTENIDO--}}
            <div class="fh5co-content-style-6">
                <div class="container">
                        <div class="row p-b text-center">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Explore the impossibility.</h2>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s"      data-wow-delay=".5s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_1.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Responsive Layout</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_2.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Retina Ready</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                            <div class="clearfix visible-sm-block"></div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_3.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Creative UI Design</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_4.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Responsive Layout</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                        </div>
>>>>>>> 04da19edde4056570c64e96e80975e14a1b9fe9e
                </div>
            </div>
            {{--FIN CONTENIDO--}}
        </div>
    </div>
</div>
@endsection