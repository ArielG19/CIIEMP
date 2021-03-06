<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta name="google-site-verification" content="KwzAOs2cSOR1n89exRUW-WFf0VmWf11SNbmrqLTgHYQ" />
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

            <title>@yield('title','Default')</title>
            <!--link rel="shortcut icon" href="favicon.ico"-->
            <link rel="stylesheet" href="/css/panelresponsive.css">
            <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

            <!-- modificamos los margenes de diseño etc. -->
            <link rel="stylesheet" href="/panel/css/AdminLTE.css">
            <link rel="stylesheet" href="/panel/css/panel.css">
            
            <!-- Datepicker Files -->
            <link rel="stylesheet" href="/panel/css/bootstrap-datepicker.css">
            <link rel="stylesheet" href="/panel/css/bootstrap-datepicker.standalone.css">


            <link rel="stylesheet" href="/css/chat.css">
            <link rel="stylesheet" href="/jquery-alert/jquery.alertable.css">
            <link rel="stylesheet" href="/chosen/chosen.css">
            <link rel="stylesheet" href="/Trumbowyg/trumb/ui/trumbowyg.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
            <div>
                    @yield('content')
            </div>
</body>
            <!-- jQuery -->
            <script type="text/javascript" src="/jquery/jquery.js"></script>
            <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="/panel/js/app.min.js"></script>

            <script type="text/javascript" src="/styleVoltage/js/tinymce/jquery.tinymce.min.js"></script>
            <script type="text/javascript" src="/styleVoltage/js/tinymce/tinymce.min.js"></script>
            <script type="text/javascript" src="/chosen/chosen.jquery.js"></script>
            <script type="text/javascript" src="/Trumbowyg/trumb/trumbowyg.js"></script>
            <script type="text/javascript" src="/jquery-alert/jquery.alertable.js"></script>

            <script src="/panel/js/bootstrap-datepicker.js"></script>
            <script src="/panel/js/bootstrap-datepicker.es.min.js"></script>



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
