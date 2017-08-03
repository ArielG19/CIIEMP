<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','Default')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    
</head>
<body>
    @include('include.nav')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">                                                       
            @yield('content')
                                            
            
        </div>

    </div>
    {{--@include('include.footer')--}}

    <script src="{{asset('jquery/jquery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
