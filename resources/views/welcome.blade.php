@extends('layouts.app')
@section('title','Inicio')
@section('content')
    <div>
        <div>
            <div class="col-md-12">
                {{--CONTENIDO modulos--}}
                <div class="fh5co-blog-style-1">
                    <div class="container">

                        <section class="work-info">
                            <div class="container">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    CIIEMP Modulos</h2>
                                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind
                                    the word mountains, far from the countries Vokalia and Consonantia, there live the
                                    blind texts. </p>
                                </div>
                                
                                <div class="row">
                                    <div class=" col-md-6 col-sm-12">
                                        <div class="work-item fh5co-post wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                                            <a href="#">
                                            <img src="styleVoltage/images/socieconomico.png" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="fh5co-post-text text-center">
                                            <h3><a href="#">Observatorio Socioeconómico</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odio,
                                            perspiciatis sint minima, nulla quod recusandae tenetur, suscipit unde
                                            sapiente.</p>
                                        </div>
                                    </div>
                    
                                <div class="col-md-6 col-sm-12 ">
                                    <div class="work-item fh5co-post wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                                        <a href="#">
                                        <img src="styleVoltage/images/bolsadeempleo.png" class="img-responsive">
                                        </a>
                                    </div>
                                      <div class="fh5co-post-text text-center">
                                            <h3><a href="#">Bolsa de Empleo</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odio,
                                            perspiciatis sint minima, nulla quod recusandae tenetur, suscipit unde
                                            sapiente.</p>
                                        </div>
                                </div>            
                                </div><!--end of row-->
                            </div><!--end of container-->
                        </section>
                        <!--end of work section-->
                        <style>
                            .img-responsive
                        {
                            width: 100%; <!-- important-->
                        }
                        
                        .blanco{
                            color:white;
                        }

                        .work-item{
                            margin-bottom: 15px;
                            overflow: hidden;
                        }
                        .work-info{
                           padding:50px 0px;
                           background-color: #fff;
                            
                        }
                        .work-item a 
                        {
                            display: block;
                            overflow: hidden;
                        }

                        .work-item a img{
                            margin: 0 auto;
                        }
                        .work-item>a>img:hover{
                            transform: scale(1.2,1.2);
                               
                        }
                        
                        a:link {text-decoration:none;color:#999999;} 
                        a:visited {text-decoration:none;color:#999999;} 
                        a:active {text-decoration:none;color:#ff0000;} 
                        a:hover {text-decoration:none;color:#F2C22F;} 

                        </style>

                    </div>
                </div>
                {{--Fin modulos--}}

                {{--CONTENIDO Proyectos--}}


                {{--Fin Proyectos--}}

                {{--CONTENIDO noticias--}}

                <div class="fh5co-content-style-6">
                    <div class="container">
                        <div id="noticias" class="row p-b text-center">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Noticias
                                    recientes.</h2>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Error totam tempora ducimus cum nam quae
                                    inventore provident autem recusandae et aperiam, adipisci obcaecati fugit qui, unde
                                    earum nostrum voluptate, placeat?.</p>
                            </div>
                        </div>
                        <div class="row ">
                            @foreach($recents as $recent)
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft"
                                     data-wow-duration="1s"
                                     data-wow-delay=".5s">
                                    <a href="{{'/articulohome/articulo'}}/{{$recent->slug}}" class="link-block">
                                        <figure>
                                            @if(isset($recent->articleImg[0]))
                                                <img src="/images/noticia/{{$recent->articleImg[0]->image}}"
                                                     alt="Image" class="img-responsive">
                                            @else
                                                <img src="{{ url('styleVoltage/images/no-disponible.jpg') }}"
                                                     class="img-responsive">
                                            @endif
                                        </figure>

                                        <div class="col-md-12 prueba">
                                            <h3>{{$recent->titulo}}</h3>
                                            <p>{{substr(strip_tags($recent->descripcion), 0,150)}}...</p>
                                        </div>


                                        <p><a href="{{'/articulohome/articulo'}}/{{$recent->slug}}" class="btn btn-primary btn-sm">Leer más</a></p>


                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    {{--FIN CONTENIDO--}}
                </div>
            </div>
        </div>
    </div>
@endsection
