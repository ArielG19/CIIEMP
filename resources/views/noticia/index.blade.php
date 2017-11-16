@extends('layouts.app')
@section('title','Noticias recientes')
@section('content')
    <div class="fh5co-blog-style-1">
        <div class="container">
            <h2>ÚLTIMAS NOTICIAS</h2>
            <hr>


                <div class="row p-b">
                    @foreach($noticias as $noticia)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-6">

                            <div class="fh5co-post wow fadeInLeft">
                                <div class="fh5co-post-image">
                                    <div class="fh5co-overlay"></div>
                                    <div class="fh5co-category">
                                        <a href="">
                                            {{$noticia->category->name}}
                                        </a></div>
                                    @if(isset($noticia->articleImg[0]))
                                        <img src="/images/noticia/{{$noticia->articleImg[0]->image}}"
                                             alt="Image" class="img-responsive">
                                    @else
                                        <img src="{{ url('styleVoltage/images/no-disponible.jpg') }}"
                                             class="img-responsive">
                                    @endif
                                </div>
                                <div class="fh5co-post-text prueba">
                                    <h3>
                                        <a href="{{'/articulohome/articulo'}}/{{$noticia->slug}}">{{$noticia->titulo}}</a>
                                    </h3>
                                    <p>{{substr(strip_tags($noticia->descripcion), 0,150)}}...</p>
                                </div>
                                <div class="fh5co-post-meta prueba2">
                                    @if(is_null($noticia->articleEvent))
                                    @else
                                        <a><i class="fa fa-star" aria-hidden="true"></i>Concurso</a>
                                    @endif
                                    <a><i class="fa fa-calendar"
                                          aria-hidden="true"></i>{{Date::parse($noticia->created_at)->format('Y-m-d')}}
                                    </a>
                                    @if(is_null($noticia->articleEvent))
                                    @else
                                        <a><i class="fa fa-calendar"
                                              aria-hidden="true"></i>Finaliza {{Date::parse($noticia->articleEvent->fecha_final)->format('Y-m-d')}}
                                        </a>
                                    @endif
                                    <a><i class="fa fa-map-marker" aria-hidden="true"></i>{{$noticia->lugar}}</a>
                                    <a href="#"><i class="icon-user" aria-hidden="true"></i>{{$noticia->users->name}}
                                    </a>
                                    <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-share-alt"
                                                                                              aria-hidden="true"></i>Compartir</a>
                                </div>

                            </div>

                        </div>
                    @endforeach()
                </div>
                <!-- Button trigger modal -->

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-alt"></i> Compartir</h4>
			      </div>
			      <div class="modal-body">
			        <p><a title="Facebook" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a> <a title="Twitter" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a> <a title="Google+" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a> <a title="Linkedin" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></span></a> <a title="Reddit" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-reddit fa-stack-1x"></i></span></a> <a title="WordPress" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-wordpress fa-stack-1x"></i></span></a> <a title="Digg" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-digg fa-stack-1x"></i></span></a>  <a title="Stumbleupon" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-stumbleupon fa-stack-1x"></i></span></a><a title="E-mail" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x"></i></span></a>  <a title="Print" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-print fa-stack-1x"></i></span></a></p>

			        <h2><i class="fa fa-envelope"></i> Newsletter</h2>

			                <p>Subscribe to our weekly Newsletter and stay tuned.</p>

			                <form action="" method="post">
			                    <div class="input-group">
			  										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			  											<input type="email" class="form-control" placeholder="your@email.com">
													</div>
			                    <br />
			                    <button type="submit" value="sub" name="sub" class="btn btn-primary"><i class="fa fa-share"></i> Subscribe Now!</button>
			                </form>
			      </div>
			       <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			   </div>

				</div>


            {!! $noticias->render()!!}

        </div>
    </div>


@endsection
