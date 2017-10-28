@extends('home')
@section('title','Usuarios')
@section('contenido')
<<<<<<< HEAD

                        <div class="col-xs-12">
                      		   <div id="message-save" class="alert alert-success alert-dismissible" role="alert"
                      		  		style="display:none">
						            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						            	<span aria-hidden="true">&times;</span>
						            </button>
									<strong> Se agrego correctamente</strong>
								</div>
=======
    <div class="col-xs-12">
        <div id="message-save" class="alert alert-success alert-dismissible" role="alert"
             style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> Se agrego correctamente</strong>
        </div>
>>>>>>> f825dd91c7a2faefb3454e0e7c07c5a0125159a2

        <div id="message-update" class="alert alert-info alert-dismissible" role="alert" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> Se actualizo correctamente</strong>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5 class="panel-title">Lista de Usuarios</h5>
            </div>
            <div class="panel-body">

                <hr>
                <p class="navbar-text navbar-right" style="margin-right:15px; margin-top:-53px;">
                    <a class="btn btn-info btn-sm" href="#myModalcreateUser" data-toggle='modal'
                       data-target='#myModalcreateUser'>
                        <span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                    </a>
                </p>
                <div id="listar-usuarios"></div>
            </div>

        </div>
    </div>
    @include('usuario.modalCreate')
    @include('usuario.modalUpdate')

<<<<<<< HEAD
	@section('script')
		<script type="text/javascript" src="{{asset('/js/user.js')}}"></script>

	@endsection
=======
@section('script')
    <script type="text/javascript" src="{{asset('/js/user.js')}}"></script>
@endsection
>>>>>>> f825dd91c7a2faefb3454e0e7c07c5a0125159a2

@endsection
