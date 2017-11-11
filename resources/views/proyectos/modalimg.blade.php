<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Imagenes de proyectos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('styleVoltage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('panel/css/panel.css')}}">
</head>

<body>

<div class="container">
    <div class="row"><!--

Photos from unsplash.com

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->

            @foreach($proyect->proyectoImg as $img)
                <figure>
                    <img src="/images/proyecto/{{$img->image}}" width="500x">
                </figure>
            @endforeach




    </div>
</div>


<!-- jQuery -->
<script src="{{asset('jquery/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('panel/js/app.min.js')}}"></script>
</body>

</html>
