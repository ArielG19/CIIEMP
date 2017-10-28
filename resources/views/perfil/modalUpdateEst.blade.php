<div class="row">
<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalUpdateEst" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content mod-yellow">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Editar mi informacion</h4>
							</div>

							<div class="modal-body">
								{{--creamos un alert--}}
								<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
										<strong id="error"></strong>
								</div>
								{{--cremos el formulario con un id para usar ajax--}}
								{!!Form::open(['id'=>'form'])!!}
									<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
									<input type="hidden" id="id">
									

									<div class="form-group">
	                        			{!!form::label('Carnet:')!!}
	                            		{!!form::text('carnet',null,['id'=>'carnet','class'=>'form-control','placeholder'=>'Escriba un numero de carnet'])!!}
	                            	</div>
	                            	
									<div class="form-group">
										{!!form::label('Nombre:')!!}
	                            		{!!form::text('primer_nombre',null,['id'=>'name1','class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
	                            	</div>

	                            	<div class="form-group">
										{!!form::label('Segundo Nombre::')!!}
	                            		{!!form::text('segundo_nombre',null,['id'=>'name2','class'=>'form-control','placeholder'=>'Escriba su segundo nombre'])!!}
	                            	</div>

	                            	<div class="form-group">
										{!!form::label('Primer Apellido:')!!}
	                            		{!!form::text('primer_apellido',null,['id'=>'apellido1','class'=>'form-control','placeholder'=>'Escriba su primer apellido'])!!}
	                            	</div>

	                            	<div class="form-group">
										{!!form::label('Segundo Apellido:')!!}
	                            		{!!form::text('segundo_apellido',null,['id'=>'apellido2','class'=>'form-control','placeholder'=>'Escriba su segundo apellido'])!!}
	                            	</div>

	                            	<div class="form-group">
										{!!form::label('Telefono:')!!}
	                            		{!!form::text('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'Escriba su numero de telefono'])!!}
	                            	</div>
	          					
	                        		 <div class="form-group">
	                                       {!!form::label('Carrera:')!!}
	                                       {!!form::select('carrera',$carrera,null,['id'=>'carrera','class'=>'form-control'])!!}
	                                 </div>
								
		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'editar','class'=>'btn btn-info'],$secure = null)!!}
							</div>
					</div>
				</div>
		</div>
</div>
</div>