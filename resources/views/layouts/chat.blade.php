<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

            <title>@yield('title','Default')</title>
            <!--link rel="shortcut icon" href="favicon.ico"-->
            <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
            <!-- modificamos los margenes de diseño etc. -->
            <link rel="stylesheet" href="/panel/css/AdminLTE.css">
            <link rel="stylesheet" href="/panel/css/panel.css">

            
            <link rel="stylesheet" href="/css/chat.css">
            <link rel="stylesheet" href="/chosen/chosen.css">
            <link rel="stylesheet" href="/jquery-alert/jquery.alertable.css">
            
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
            <script src="/jquery/jquery.js"></script>
            <!-- Bootstrap -->
            <script src="/bootstrap/js/bootstrap.min.js"></script>
            <script src="/panel/js/app.min.js"></script>
            <script src="/chosen/chosen.jquery.js"></script>
            <script src="/jquery-alert/jquery.alertable.js"></script>
           
            @yield('script')
</html>