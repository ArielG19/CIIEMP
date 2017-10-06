@extends('home')
@section('title','Usuarios')
@section('contenido')
<<<<<<< HEAD

		<div class="row">
=======
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
                        <div class="col-xs-12">
                      		   <div id="message-save" class="alert alert-success alert-dismissible" role="alert"
                      		  		style="display:none">
						            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						            	<span aria-hidden="true">&times;</span>
						            </button>
									<strong> Se agrego correctamente</strong>
								</div>

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
															    <a class="btn btn-info btn-sm" href="#myModalcreateUser" data-toggle='modal' data-target='#myModalcreateUser'>
															 		<span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										              			</a>
										</p>
										<div id="listar-usuarios"></div>
									</div>

                      			</div>
                      	</div>
<<<<<<< HEAD
             </div>
@include('usuario.modalCreate')
@include('usuario.modalUpdate')

	@section('script')
		<script type="text/javascript" src="{{asset('/js/user.js')}}"></script>
=======
@include('usuario.modalCreate')
@include('usuario.modalUpdate')

@section('script')
	<script type="text/javascript" src="{{asset('/js/user.js')}}"></script>
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
	@endsection

@endsection
