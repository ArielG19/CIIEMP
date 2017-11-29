@extends('layouts.app')
@section('title','Blogs')
@section('content')
    <div class="fh5co-blog-style-1">
        <div class="container">
            <div class="row p-b">
                <div class="col-md-8 col-sm-6 col-xs-12 col-xxs-12">
                    <div class="fh5co-post wow fadeInLeft">
                        <div class="fh5co-post-image">
                            <div class="fh5co-overlay"></div>
                            <div class="fh5co-category"><a>{{$blogs->category->name}}</a></div>
                            @if($blogs->path==null)
                                <img src="{{ url('styleVoltage/images/no-disponible.jpg') }}" class="img-responsive">
                            @else

                                <img src="/images/{{$blogs->path}}" alt="Image" class="img-responsive">

                            @endif
                        </div>
                        <div class="fh5co-post-text">
                            <h3><a>{{$blogs->titulo}}</a></h3>
                            <p class="parrafo1 img-tex">{!!nl2br($blogs->descripcion)!!}</p>
                            @if($blogs->file != null)
                                <a href="/download/pdf/{{$blogs->file}}" target="_blank">Ver archivo</a>

                            @endif

                        </div>

                        <div class="fh5co-post-meta">
                            <a href="#" data-toggle='modal' data-target='#myModalComentario'>
                                <i class="icon-chat"></i>Comentar
                            </a>
                            <a href="" class="pull-right">

                                <i class="fa fa-calendar"></i>{{Date::parse($blogs->created_at)->format('j \d\e F \d\e Y')}}
                            </a>
                            <a href="" class="pull-right"><i class="icon-user" aria-hidden="true"></i>{{$blogs->users->name}}</a>

                            {{--Inicio de comentarios--}}
                            <div id="message-save" class="alert alert-success alert-dismissible" role="alert"
                                 style="display:none">
                                <strong> Se agrego correctamente</strong>
                            </div>

                            <div id="message-update" class="alert alert-info alert-dismissible" role="alert"
                                 style="display:none">
                                <strong> Se actualizo correctamente</strong>
                            </div>
                            <div id="message-delete" class="alert alert-danger alert-dismissible" role="alert"
                                 style="display:none">
                                <strong> Se ha eliminado correctamente</strong>
                            </div>
                            <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                               aria-controls="collapseExample">
                                ver comentarios <span class="badge">{{$blogs->comentarios->count()}}</span>
                            </a>

                            <div class="collapse" id="collapseExample">
                                <div class="well" id="caja">
                                    <div id="listar-comentarios"></div>
                                </div>
                            </div>
                            {{--Fin de comentarios--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 hidden-xs hidden-sm  categoryd">
                    <!-- Category -->
                    <div class="single category">
                        <h3 class="side-title">Categorias</h3>

                        <ul class="list-group">
                            @foreach($allcategorias as $cate)
                                <li class="list-group-item">
                                    <span class="badge">{{$cate->blogs->count()}}</span>
                                    <a href="{{route('bloghome.filtrar.categorias',$cate->name)}}">
                                        {{$cate->name}}
                                    </a>
                                </li>
                            @endforeach()
                            <li class="list-group-item"><a href="/bloghome">
                                    Todos
                                </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('comentarios.modalComentar')
    @include('comentarios.modalEdit')
@section('script')
        <script type="text/javascript" src="{{asset('/js/comentarios.js')}}"></script>
@endsection
@endsection
