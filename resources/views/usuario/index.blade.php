@extends('home')
@section('title','Usuarios')
@section('contenido')
	
			<div id="message-save" class="alert alert-success alert-dismissible" role="alert" style="display:none">
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

			
			 <div class="container">
                      <div class="col-xs-10 col-md-offset-1">
                              <div class="panel panel-primary">
                                 <div class="panel-heading">
                                     
                                </div>
                                  	<div class="panel-body">
                     							<div class="row">
														<div class="col-md-6">
															<h3 class="panel-title">Lista de Usuarios</h3>
															<hr>
														</div>

														<div class="col-md-6">
															<p class="navbar-text navbar-right" style="margin-right:15px; margin-top:7px;">
															    <a class="btn btn-info btn-sm" href="#myModalcreateUser" data-toggle='modal' data-target='#myModalcreateUser'>
															 		<span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										              			</a>
															</p>
														</div>			
												</div>
		                                      	<div class="row">
													<div class="col-xs-12">
														<div id="listar-usuarios"></div>			
													</div>
		                                 		</div>
		                       		</div>

                      </div>
                   
</div>
			@include('usuario.modalCreate')
@include('usuario.modalUpdate')

@section('script')
	<script type="text/javascript" src="{{asset('/js/user.js')}}"></script>
	@endsection	

@endsection		