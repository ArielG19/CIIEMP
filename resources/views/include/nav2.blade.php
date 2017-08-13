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
                        <li><a href="#">Observatorio</a></li>
                        <li><a href="{{ url('/acercade') }}">Acerca de nosotros</a></li>


                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 text-right fh5co-link-wrap">
                    <ul class="fh5co-special" data-offcanvass="yes">

                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}" class="call-to-action">Register</a></li>
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

<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">CIIEM</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i> Bildirimler <span class="badge">0</span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Music</span> sayfası <span class="badge">Video</span> sayfasında etiketlendi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Music</span> sayfasında iletiniz beğenildi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Video</span> sayfasında iletiniz beğenildi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Game</span> sayfasında iletiniz beğenildi</a></li>
					</ul>
				</li>
				<li class="active"><a href="#">Ana Sayfa <span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Geri bildirim</a></li>
						<li><a href="#">Yardım</a></li>
						<li class="divider"></li>
						<li><a href="#">Ayarlar</a></li>
						<li><a href="#exit">Çıkış yap</a></li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-right search-form" role="search">
				<input type="text" class="form-control" placeholder="Search" />
			</form>
		</div>
	</div>

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
                         <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#" class="btn btn-primary btn-outline btn-lg">Acerca de nosotros</a></p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   </div>


</nav>
