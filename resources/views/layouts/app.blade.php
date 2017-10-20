<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>

    <title>@yield('title','Default')</title>


    <!--link rel="shortcut icon" href="favicon.ico"-->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700'
          rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('styleVoltage/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('styleVoltage/css/icomoon.css')}}">
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="{{asset('styleVoltage/css/magnific-popup.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('styleVoltage/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('styleVoltage/css/owl.theme.default.min.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('styleVoltage/css/bootstrap.css')}}">

    <!-- Cards -->
    <link rel="stylesheet" href="{{asset('styleVoltage/css/cards.css')}}">
    <!--countdown-->
    <link rel="stylesheet" href="{{asset('css/TimeCircles.css')}}">

    <!--slider-->
    <link rel="stylesheet" href="{{asset('css/bxslider.css')}}">
    <!--zoom-->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('styleVoltage/js/modernizr-2.6.2.min.js')}}"></script>


    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/main.css')}}">


</head>
<body>

<section>
    @include('include.nav')
</section>

<section>
    @yield('content')
</section>

<section class="col-md-12">
    @include('include.footer')
</section>


</body>
<!-- jQuery -->
<script src="{{asset('styleVoltage/js/jquery.min.js')}}"></script>

<!-- jQuery Easing -->
<script src="{{asset('styleVoltage/js/jquery.easing.1.3.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('styleVoltage/js/bootstrap.min.js')}}"></script>

<!-- Waypoints -->
<script src="{{asset('styleVoltage/js/jquery.waypoints.min.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('styleVoltage/js/owl.carousel.min.js')}}"></script>

<!-- Magnific Popup -->
<script src="{{asset('styleVoltage/js/jquery.magnific-popup.min.js')}}"></script>

<!-- countTo -->
<script src="{{asset('styleVoltage/js/jquery.countTo.js')}}"></script>

<!-- Stellar -->
<script src="{{asset('styleVoltage/js/jquery.stellar.min.js')}}"></script>

<!-- WOW -->
<script src="{{asset('styleVoltage/js/wow.min.js')}}"></script>

<script> new WOW().init();</script>


{{--<script src="{{asset('js/scrolling-animated.js')}}"></script>--}}


<!-- Main -->
<script src="{{asset('styleVoltage/js/main.js')}}"></script>
<script src="{{asset('styleVoltage/js/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{asset('styleVoltage/js/tinymce/tinymce.min.js')}}"></script>
<!-- countdown -->
<script src="{{asset('js/TimeCircles.js')}}"></script>


<script src="{{asset('styleVoltage/js/modernizr-2.6.2.min.js')}}"></script>

@yield('script')
</html>
