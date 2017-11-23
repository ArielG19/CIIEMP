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
    <link rel="stylesheet" href="/styleVoltage/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/styleVoltage/css/icomoon.css">
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="/styleVoltage/css/magnific-popup.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/styleVoltage/css/owl.carousel.min.css">
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="/engine1/style.css">
    <script type="text/javascript" src="/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

    <link rel="stylesheet" href="/styleVoltage/css/owl.theme.default.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/styleVoltage/css/bootstrap.css">

    <!-- Cards -->
    <link rel="stylesheet" href="/styleVoltage/css/cards.css">
    <!--countdown-->
    <link rel="stylesheet" href="/css/TimeCircles.css">

    <!--slider-->
    <link rel="stylesheet" href="/css/bxslider.css">
    <!--zoom-->
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <!-- Modernizr JS -->
    <script src="/styleVoltage/js/modernizr-2.6.2.min.js"></script>


    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/jquery-alert/jquery.alertable.css">


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
<script src="/styleVoltage/js/jquery.min.js"></script>

<!-- jQuery Easing -->
<script src="/styleVoltage/js/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script src="/styleVoltage/js/bootstrap.min.js"></script>

<!-- Waypoints -->
<script src="/styleVoltage/js/jquery.waypoints.min.js"></script>

<!-- Owl Carousel -->
<script src="/styleVoltage/js/owl.carousel.min.js"></script>

<!-- Magnific Popup -->
<script src="/styleVoltage/js/jquery.magnific-popup.min.js"></script>

<!-- countTo -->
<script src="/styleVoltage/js/jquery.countTo.js"></script>

<!-- Stellar -->
<script src="/styleVoltage/js/jquery.stellar.min.js"></script>

<!-- WOW -->
<script src="/styleVoltage/js/wow.min.js"></script>

<script> new WOW().init();</script>


{{--<script src="{{asset('js/scrolling-animated.js')}}"></script>--}}


<!-- Main -->
<script src="/styleVoltage/js/main.js"></script>
<script src="/styleVoltage/js/tinymce/jquery.tinymce.min.js"></script>
<script src="/styleVoltage/js/tinymce/tinymce.min.js"></script>
<!-- countdown -->
<script src="/js/TimeCircles.js"></script>
<script src="/jquery-alert/jquery.alertable.js"></script>


<script src="/styleVoltage/js/modernizr-2.6.2.min.js"></script>
<script src="/styleVoltage/js/navegador.js"></script>

@yield('script')
</html>
