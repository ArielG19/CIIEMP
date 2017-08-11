@extends('layouts.panel')
@section('title','Home')
@section('content')
<div class="wrapper">
        <header class="main-header">
                     <a href="index2.html" class="logo">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                  
                  <!-- logo for regular state and mobile devices -->
                  <span class="logo-lg"><b>CIIEMP</b></span>
                </a>
                    <nav class="navbar navbar-static-top" role="navigation">
                          <!-- Sidebar toggle button-->
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
                    </nav>
                    


         </header>
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
                  <section class="sidebar">
                      <!-- Sidebar user panel -->
                     
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                          <ul class="sidebar-menu">
                                   <li class="treeview">
                                      <a href="#">
                                        <i class="fa fa-pencil"></i>
                                        <span>Admin</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                        <ul class="treeview-menu">
                                        <li><a href="agregar"><i class="fa fa-circle-o"></i>Agregar Personas</a></li>
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
                                        <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>enlace 1</a></li>
                                        <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i>enlace 2</a></li>
                                      </ul>
                                  </li>

                                  <li class="treeview">
                                      <a href="#">
                                        <i class="fa fa-book"></i>
                                        <span>Biblioteca Virtual</span>
                                         <i class="fa fa-angle-left pull-right"></i>
                                      </a>
                                      <ul class="treeview-menu">
                                        <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>enlace 1</a></li>
                                        <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>enlace 2</a></li>
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
            <!-- /.sidebar -->
          </aside>

          <!--Contenido-->
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    @yield('contenido')
                </section><!-- /.content -->
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
