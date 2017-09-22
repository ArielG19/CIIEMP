@extends('home')
@section('title','Profesiones')
@section('contenido')
		<div class="row">
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
											<h5 class="panel-title">Lista de Profesiones</h5>
	                                </div>
                                  	<div class="panel-body">
										
										<hr>
										<p class="navbar-text navbar-right" style="margin-right:15px; margin-top:-53px;">
															    <a class="btn btn-info btn-sm" href="#" data-toggle='modal' data-target='#createProfesion'>
															 		<span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
										              			</a>
										</p>
										<div id="listar-profesion"></div>
									</div>

                      			</div>
                      	</div>
        </div>
        @include('profesion.CreateProfesion')
@section('script')
      @endsection
@endsection