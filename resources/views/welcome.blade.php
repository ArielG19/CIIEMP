@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div>
    <div>
        <div class="col-md-12">
            {{--CONTENIDO modulos--}}
            <div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">CIIEMP Modulos</h2>
						<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="row p-b">
					<div class="col-md-6 col-sm-8 col-xs-8 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>
								<img src="styleVoltage/images/bolsadeempleo.png" alt="Image" class="img-responsive">

							</div>
							<div class="fh5co-post-text">
								<h3><a href="#">Bolsa de Empleo</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odio, perspiciatis sint minima, nulla quod recusandae tenetur, suscipit unde sapiente.</p>
							</div>
							<div class="fh5co-post-meta">

							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-8 col-xs-8 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.4s">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>

								<img src="styleVoltage/images/socieconomico.png" alt="Image" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a href="#">Observatorio Socioeconómico</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odio, perspiciatis sint minima, nulla quod recusandae tenetur, suscipit unde sapiente.</p>
							</div>
							<div class="fh5co-post-meta">

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
            {{--Fin modulos--}}

            {{--CONTENIDO Proyectos--}}


            {{--Fin Proyectos--}}

			{{--CONTENIDO noticias--}}

            <div class="fh5co-content-style-6">
                <div class="container">
                        <div class="row p-b text-center">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Noticias recientes.</h2>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error totam tempora ducimus cum nam quae inventore provident autem recusandae et aperiam, adipisci obcaecati fugit qui, unde earum nostrum voluptate, placeat?.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s"      data-wow-delay=".5s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_1.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Responsive Layout</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Leer más</a></p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_2.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Retina Ready</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Leer más</a></p>
                                </a>
                            </div>
                            <div class="clearfix visible-sm-block"></div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_3.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Creative UI Design</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Leer más</a></p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_4.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Responsive Layout</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Leer más</a></p>
                                </a>
                            </div>
                        </div>

                </div>
            </div>
            {{--FIN CONTENIDO--}}
        </div>
    </div>
</div>
@endsection
