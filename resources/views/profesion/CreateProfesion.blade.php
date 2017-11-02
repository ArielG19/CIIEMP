<div class="row">
<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="createProfesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content mod-yellow">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Agregar nueva profesion</h4>
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
		                        		{!!form::label('Profesion:')!!}
		                            	{!!form::text('name',null,['id'=>'profesion','class'=>'form-control','placeholder'=>'Escriba el nombre de profesion'])!!}
		          					</div>

		                    		<div class="form-group">
		              					<!--Nombramos las cajas de texto igual que los campos de la bd-->
		              					{!!form::label('Descripcion:')!!}
		              					{!!form::email('email',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
		            				</div>
		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'guardar','class'=>'btn btn-info'],$secure = null)!!}
							</div>
					</div>
				</div>
		</div>
</div>
</div>