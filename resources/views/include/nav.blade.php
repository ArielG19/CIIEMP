<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">CIIEMP</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Inicio<span class="sr-only">(current)</span></a></li>

<<<<<<< HEAD
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                         LoginCollapse
                                    </a>
                                    </li>
                                    <li><a href="{{ url('/register') }}" class="call-to-action">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
=======
        <li class="active"><a href="{{ url('bloghome') }}"><i class="fa fa-book fa-lg" aria-hidden="true"></i> Blog<span class="sr-only">(current)</span></a></li>
>>>>>>> 9ecb7b3c9bf02ed687c1bb46730d707358884d67

        <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-puzzle-piece fa-lg" aria-hidden="true"></i> Modulos</a>
					<ul class="dropdown-menu" role="menu">

						<li><a href="#"><span class="badge">B</span>Bolsa de Empleo</a></li>
						<li><a href="#"><span class="badge">O</span>observatorio socioeconómico</a></li>

					</ul>
				</li>
        <li class="active"><a href="#"><i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> Noticias<span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="#"><i class="fa fa-tasks fa-lg" aria-hidden="true"></i> Proyectos<span class="sr-only">(current)</span></a></li>

        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Login</a></li>
            <li><a href="{{ url('/register') }}" class="call-to-action">Register</a></li>
        @else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Mi cuenta</a></li>
						<li><a href="#">opcion #2</a></li>
						<li class="divider"></li>

						<li><a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout</a></li>
					</ul>
				</li>
        @endif


			</ul>
			<form class="navbar-form navbar-right search-form" role="search">
				<input type="text" class="form-control" placeholder="Búsqueda" />
			</form>
		</div>
	</div>
</nav>
        <!--FIN DE MENU-->
         <div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes"  style="background-image: url(styleVoltage/images/ciiemp-Walpaper.png);">
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
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#" class="btn btn-primary btn-outline btn-lg">Acerca de nosotros</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<<<<<<< HEAD

</div>

@include('auth.login')
=======
>>>>>>> 9ecb7b3c9bf02ed687c1bb46730d707358884d67
