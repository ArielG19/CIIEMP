<div class="row">
<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalcreateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content mod-yellow">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Agregar nuevo usuario</h4>
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

<<<<<<< HEAD
									<div class="form-group">
=======
									 <div class="form-group">
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
		                        		{!!form::label('Nombre:')!!}
		                            	{!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
		          					</div>

		                    		<div class="form-group">
		              					<!--Nombramos las cajas de texto igual que los campos de la bd-->
		              					{!!form::label('Email:')!!}
		              					{!!form::email('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Escriba un correo example@gmil.com'])!!}
		            				</div>
		            				<div class="form-group">
		              				{!!Form::label('Contraseña:')!!}
		              				{!!Form::password('password',['id'=>'password','class' => 'form-control','placeholder'=> '*******','required'])!!}
		            				</div>

		                    		<div class="form-group">
		                        		{!!Form::label('Tipo')!!}
		                        		{!!Form::select('type',['admin'=>'administrador','profesor'=>'Profesor','estudiante'=>'Estudiante'],null,['id'=>'type','class'=>'form-control'])!!}
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
