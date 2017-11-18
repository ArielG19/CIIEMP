<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">CIIEMP</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right" id="navegador">
                <li class="active"><a href="{{ url('/') }}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i> Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
                     Investigación
                    </a>
                    <ul class="dropdown-menu" role="menu">

                        <li><a href="{{ url('/docentes-innovadores') }}"></span>Docentes Investigadores</a></li>


                    </ul>
                </li>
                <li class="active"><a href="{{ url('bloghome') }}">
                        <i class="fa fa-bold fa-lg" aria-hidden="true">
                        </i> Blog<span class="sr-only">(current)</span></a>
                </li>
                <li class="active"><a href="{{ url('biblioteca') }}">
                        <i class="fa fa-book fa-lg" aria-hidden="true">
                        </i> Repositorio<span class="sr-only">(current)</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-puzzle-piece fa-lg" aria-hidden="true"></i> Módulos
                    </a>
                    <ul class="dropdown-menu" role="menu">

                        <li><a href="#"><span class="badge">B</span>Bolsa de Empleo</a></li>
                        <li><a href="#"><span class="badge">O</span>observatorio socioeconómico</a></li>

                    </ul>
                </li>
                <li class="active"><a href="{{ url('articulohome') }}">
                        <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>
                        Noticias<span class="sr-only">(current)</span></a>
                </li>
                <li class="active"><a href="{{url('proyectos')}}">
                    <i class="fa fa-tasks fa-lg" aria-hidden="true"></i>
                    Proyectos<span class="sr-only">(current)</span></a>
                </li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a role="button" data-toggle="collapse" href="#collapseAcceder" aria-expanded="false"
                           aria-controls="collapseExample">
                            <i class="fa fa-sign-in fa-lg"></i> Acceder
                        </a>
                    </li>

                    <li><a role="button" data-toggle="collapse" href="#collapseRegistro" aria-expanded="false"
                           aria-controls="collapseExample">
                            <i class="fa fa-user fa-lg"></i> Registrarse
                        </a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/home') }}">Panel de Administración</a></li>
                            <li><a href="{{ url('/mi-perfil') }}">Mi cuenta</a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!--FIN DE MENU-->
<div id="banner" class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes">
                                                <div class="fh5co-cover-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-10 col-md-6 full-height js-full-height">
                                            @include('auth.login')
                                            @include('auth.register')
                                    </div>
                                    <div class="col-md-6 full-height js-full-height">
                                        <div class="fh5co-cover-intro">
                                            <div class="well" id="text-well">
                                                <h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Centro
                                                    de Investigación para la Innovación y el Emprendimiento</h1>
                                                <h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                                                    Plataforma Web para la promoción y desarrollo de proyectos de innovación y emprendimiento.</h2>
                                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a
                                                            href="{{ url('/acercade') }}" class="btn btn-primary btn-outline btn-lg">Acerca
                                                        de nosotros</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
