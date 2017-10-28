<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

          <title>@yield('title','Default')</title>
          <link type="text/css" rel="stylesheet" href="/curriculon_css/css/red.css" />
          <link type="text/css" rel="stylesheet" href="/font-awesome/css/font-awesome.css"/>      
      </head>
        <body class="hold-transition skin-blue sidebar-mini">
              <div>
                  @yield('contenido')
              </div>
        </body>
        @yield('script')
</html>