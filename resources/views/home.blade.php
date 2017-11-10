@extends('layouts.panel')
@section('title','Home')
@section('content')
    <div class="wrapper">
        <header class="main-header">
            <a href="/" class="logo">
                <span class="logo-lg"><b>CIIEMP</b></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    <img src="/perfil/{{Auth::user()->imagen}}"
                                         style="width: 42px; height: 42px; position:absolute; top: 8px; left:-45px;border-radius: 50%">
                                    {{ Auth::user()->name }}
                                    <span class="caret" style="margin-right:20px;"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('mi-perfil')}}">Mi cuenta</a></li>
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
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
            @if(Auth::user()->type == "admin")
                <ul class="sidebar-menu">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pencil"></i>
                            <span>Admin</span>
                            <i class="fa fa-angle-left pull-right"></i>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{url('/usuarios') }}">
                                        <i class="fa fa-circle-o"></i>Usuarios</a>
                                </li>
                                <li>
                                    <a href="{{route('carrera.index') }}">
                                        <i class="fa fa-circle-o"></i>Listado de carreras</a>
                                </li>
                                <li>
                                    <a href="{{route('carrera.create') }}">
                                        <i class="fa fa-circle-o"></i>Registrar una carrera</a>
                                </li>
                            </ul>
                        </a>
                    </li>
                     <li class="treeview">
                        <a href="#">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            <span>Categorias</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                <li>
                                    <a href="{{route('categoria.index')}}">
                                        <i class="fa fa-circle-o"></i>Listado de categorias
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('categoria.create')}}"><i class="fa fa-circle-o"></i>Registrar una categoria
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-line-chart"></i>
                            <span>Proyectos</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('proyectos.create')}}"><i class="fa fa-circle-o"></i>Proyecto de Estudiantes</a>
                            </li>
                            <li><a href="{{route('proyectos.createEgresados')}}"><i class="fa fa-circle-o"></i>Proyecto de Egresados</a>
                            </li>
                            <li><a href="{{route('proyectos.index')}}"><i class="fa fa-circle-o"></i>Listar
                                    Proyectos</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bold"></i>
                            <span>Blog</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('blogs.index')}}">
                                    <i class="fa fa-circle-o"></i>Entradas de blog
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blogs.create')}}">
                                    <i class="fa fa-circle-o"></i>Crear Entradas
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Repositorio digital</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                    <a href="{{route('bibliotecas.index')}}">
                                        <i class="fa fa-circle-o"></i>Listar archivos
                                    </a>
                            </li>
                            <li>
                                    <a href="{{route('bibliotecas.create')}}">
                                        <i class="fa fa-circle-o"></i>Subir un archivo
                                    </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i> <span>Noticias</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                    <a href="{{route('noticia.index')}}">
                                        <i class="fa fa-circle-o"></i>Entradas de articulos
                                    </a>
                            </li>
                            <li>
                                    <a href="{{route('noticia.create')}}">
                                        <i class="fa fa-circle-o"></i>Crear un articulo
                                    </a>
                            </li>
                        </ul>
                    </li>
                     <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list-alt" aria-hidden="true"></i> <span>Curriculum</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                    <a href="{{url('/curriculum')}}">
                                        <i class="fa fa-circle-o"></i>Agregar curriculum
                                    </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Publicaciones</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                    <a href="{{url('/publicaciones')}}">
                                        <i class="fa fa-circle-o"></i>Publicaciones de docentes
                                    </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                <span>Chat</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ url('/chat') }}">
                                    <i class="fa fa-circle-o"></i>Ir al sala de chat
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @elseif(Auth::user()->type == "profesor")
                <ul class="sidebar-menu">
                     <li class="treeview">
                        <a href="#">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            <span>Categorias</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                <li>
                                    <a href="{{route('categoria.index')}}">
                                        <i class="fa fa-circle-o"></i>Listado de categorias
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('categoria.create')}}"><i class="fa fa-circle-o"></i>       registrar una categoria
                                    </a>
                                </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bold"></i>
                            <span>Blog</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('blogs.index')}}"><i class="fa fa-circle-o"></i>Entradas de blog</a>
                            </li>
                            <li><a href="{{route('blogs.create')}}"><i class="fa fa-circle-o"></i>Crear Entradas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Repositorio digital</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('bibliotecas.index')}}"><i class="fa fa-circle-o"></i>Listar archivos</a></li>
                            <li><a href="{{route('bibliotecas.create')}}"><i class="fa fa-circle-o"></i>Subir un archivo</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i> <span>Noticias</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('noticia.index')}}"><i class="fa fa-circle-o"></i>Entradas de articulos
                                </a>
                            </li>
                            <li>
                                <a href="{{route('noticia.create')}}"><i class="fa fa-circle-o"></i>Crear un
                                    articulo
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Chat</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ url('/chat') }}"><i class="fa fa-circle-o"></i>Ir al sala de chat</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            @else
                <ul class="sidebar-menu">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Chat</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ url('/chat') }}"><i class="fa fa-circle-o"></i>Ir al sala de chat</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endif
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                
                    @yield('contenido')

                
            </section>
        </div>
        <!--Fin-Contenido-->
        <footer class="main-footer">

        </footer>
    </div>
@endsection
