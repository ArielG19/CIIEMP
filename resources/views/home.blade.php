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
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"    role="button" aria-expanded="false">
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

                                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
                                              <a href="/agregar">
                                              <i class="fa fa-circle-o"></i>Agregar Personas</a>
                                            </li>
                                            <li>
                                              <a href="{{url('home/carrera') }}">
                                              <i class="fa fa-circle-o"></i>Carreras</a>
                                            </li>
                                        </ul>
                                      </a>
                                  </li>
                                  <li class="treeview">
                                        <a href="#">
                                          <i class="fa fa-line-chart"></i>
                                          <span>Proyectos</span>
                                          <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                          <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i>enlace 1</a></li>
                                          <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>enlace 2</a></li>
                                        </ul>
                                  </li>
                                  <li class="treeview">
                                      <a href="#">
                                        <i class="fa fa-bold"></i>
                                        <span>Blog</span>
                                         <i class="fa fa-angle-left pull-right"></i>
                                      </a>
                                      <ul class="treeview-menu">
                                        <li><a href="{{route('categoria.index')}}"><i class="fa fa-circle-o"></i>Listado de categorias</a></li>
                                        <li><a href="{{route('categoria.create')}}"><i class="fa fa-circle-o"></i>Crear categorias</a></li>
                                        <li><a href="{{route('blogs.index')}}"><i class="fa fa-circle-o"></i>Entradas de blog</a></li>
                                        <li><a href="{{route('blogs.create')}}"><i class="fa fa-circle-o"></i>Crear Entradas</a></li>
                                      </ul>
                                  </li>
                                  <li class="treeview">
                                      <a href="#">
                                        <i class="fa fa-book"></i>
                                        <span>Biblioteca Virtual</span>
                                         <i class="fa fa-angle-left pull-right"></i>
                                      </a>
                                      <ul class="treeview-menu">
                                        <li><a href="{{route('bibliotecas.index')}}"><i class="fa fa-circle-o"></i>lista</a></li>
                                        <li><a href="{{route('bibliotecas.create')}}"><i class="fa fa-circle-o"></i>Crear</a></li>
                                      </ul>
                                  </li>
                                  <li class="treeview">
                                      <a href="#">
                                        <i class="fa fa-newspaper-o"></i> <span>Noticias</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                      </a>
                                      <ul class="treeview-menu">
                                        <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i>enlace 1</a></li>

                                      </ul>
                                  </li>
                          </ul>
                  </section>
          </aside>

          <div class="content-wrapper">
                <section class="content">
                      <div class="container">
                                  @yield('contenido')

                      </div>
                </section>
          </div>
          <!--Fin-Contenido-->
          <footer class="main-footer">
              <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
              </div>
              <strong>Copyright &copy; 20017 <a href="#">Got19</a>.</strong> All rights reserved.
          </footer>
</div>
@endsection
