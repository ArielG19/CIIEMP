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

            <!-- Datepicker Files -->
            <link rel="stylesheet" href="{{asset('panel/css/bootstrap-datepicker.css')}}">
            <link rel="stylesheet" href="{{asset('panel/css/bootstrap-datepicker.standalone.css')}}">
            <link rel="stylesheet" href="{{asset('css/chat.css')}}">
            <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
            <div>
                    @yield('content')
            </div>
</body>
            <!-- jQuery -->
            <script src="{{asset('jquery/jquery.js')}}"></script>
            <!-- Bootstrap -->
            <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

            <script src="{{asset('panel/js/app.min.js')}}"></script>



            <script src="{{asset('styleVoltage/js/tinymce/jquery.tinymce.min.js')}}"></script>
            <script src="{{asset('styleVoltage/js/tinymce/tinymce.min.js')}}"></script>
            <script src="{{asset('chosen/chosen.jquery.js')}}"></script>
            <script src="{{--asset('styleVoltage/js/main.js')--}}"></script>


            <script src="{{asset('panel/js/bootstrap-datepicker.js')}}"></script>
            <!-- Languaje -->
            <script src="{{asset('panel/js/bootstrap-datepicker.es.min.js')}}"></script>



            <script>
              tinymce.init({
                selector: "#textareay",
                  theme: "modern",
                  paste_data_images: true,
                  plugins: [
                    "advlist autolink lists link image preview hr anchor pagebreak",
                    "table ",
                    "paste textcolor colorpicker textpattern"
                  ],
                  toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

                  image_advtab: true,
                  language: 'es',
                  menubar: "false",
                  forced_root_block : false,
                  force_br_newlines : true,
                  force_p_newlines : false,

                  file_picker_callback: function(callback, value, meta) {
                    if (meta.filetype == 'image') {
                      $('#upload').trigger('click');
                      $('#upload').on('change', function() {
                        var file = this.files[0];
                        var reader = new FileReader();
                        reader.onload = function(e) {
                          callback(e.target.result, {
                            alt: ''
                          });
                        };
                        reader.readAsDataURL(file);
                      });
                    }
                  },
                  templates: [{
                    title: 'Test template 1',
                    content: 'Test 1'
                  }, {
                    title: 'Test template 2',
                    content: 'Test 2'
                  }]
                });
           </script>
            <script>
            $('.datepicker').datepicker({
                format: "yyyy-mm-dd",
                language: "es",
                todayBtn: true,
                autoclose: true
            }).datepicker("setDate", new Date());
            </script>
            @yield('script')
</html>
