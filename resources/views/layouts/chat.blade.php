<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

            <title>@yield('title','Default')</title>
            <!--link rel="shortcut icon" href="favicon.ico"-->
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
            <!-- modificamos los margenes de diseño etc. -->
            <link rel="stylesheet" href="{{asset('panel/css/AdminLTE.css')}}">
            <link rel="stylesheet" href="{{asset('panel/css/panel.css')}}">

            
            <link rel="stylesheet" href="{{asset('css/chat.css')}}">
            <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
            <link rel="stylesheet" href="{{asset('/jquery-alert/jquery.alertable.css')}}">
            
</head>
<body class="hold-transition skin-blue sidebar-mini">
            
<section>
    @include('include.navInterno')
</section>
            <div>
                    @yield('contenido')
            </div>
            
</body>
            <!-- jQuery -->
            <script src="{{asset('jquery/jquery.js')}}"></script>
            <!-- Bootstrap -->
            <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('panel/js/app.min.js')}}"></script>
            <script src="{{asset('chosen/chosen.jquery.js')}}"></script>
            <script type="text/javascript" src="{{asset('/jquery-alert/jquery.alertable.js')}}"></script>
           
            @yield('script')
</html>