<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

    <title>@yield('title','Default')</title>

    <!--link rel="shortcut icon" href="favicon.ico"-->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{--asset('css/main.css')--}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

  
    
    
</head>
<body>
    @include('include.navInterno')
    <div class="row">                                                      
            @yield('content')
                                            
    </div>
    {{--@include('include.footer')--}}
    
    
    <!-- jQuery -->
    <script src="{{asset('jquery/jquery.js')}}"></script>


    <!-- Bootstrap -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
   
</body>
</html>
