<div id="fh5co-page">
        <nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
            <div class="container">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
                    <a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i></i></a>
                    <a href="#">CIIEMP</a>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
                    <ul data-offcanvass="yes">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#">Bolsa de Empleo</a></li>
                        <li><a href="#">Observatorio Socioeconómico </a></li>
                        <li><a id="linkB" href="#">Biblioteca Virtual</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 text-right fh5co-link-wrap">
                    <ul class="fh5co-special" data-offcanvass="yes">

                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        Logout
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
         <div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes"  style="background-image: url(styleVoltage/images/full_1.jpg);">
            <span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                <a href="#">
                    <span class="mouse"><span></span></span>
                </a>
            </span>
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-push-6 col-md-6 full-height js-full-height">
                            <div class="fh5co-cover-intro">
                                <h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Centro de Investigación para la Innovación y el Emprendimiento</h1>
                                <h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</h2>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="http://freehtml5.co/" class="btn btn-primary btn-outline btn-lg">Acerca de nosotros</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

</div>
