<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content mod-yellow">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Actualizar datos de usuario</h4>
					</div>

					<div class="modal-body">
						{{--creamos un alert--}}
						<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
								<strong id="error"></strong>
						</div>
							{!!Form::open(['route' => ['usuarios.update', $user], 'method' => 'PUT'])!!}
							<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
							<input type="hidden" id="id">

							 <div class="form-group">

															{!!form::label('Nombre:')!!}
                            	{!!form::text('primer_nombre',null,['class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
															{!!form::label('Segundo Nombre::')!!}
                            	{!!form::text('segundo_nombre',null,['class'=>'form-control','placeholder'=>'Escriba su segundo nombre'])!!}
															{!!form::label('Primer Apellido:')!!}
                            	{!!form::text('primer_apellido',null,['class'=>'form-control','placeholder'=>'Escriba su primer apellido'])!!}
															{!!form::label('Segundo Apellido:')!!}
                            	{!!form::text('segundo_apellido',null,['class'=>'form-control','placeholder'=>'Escriba su segundo apellido'])!!}
															{!!form::label('Telefono:')!!}
                            	{!!form::text('telefono',null,['class'=>'form-control','placeholder'=>'Escriba su numero de telefono'])!!}
          					</div>

                    		<div class="form-group">
                        		{!!Form::label('Profesion')!!}
                        		{!!Form::select('type',[''=>'Seleccione un tipo','admin'=>'administrador','profesor'=>'Profesor','estudiante'=>'Estudiante'],null,['id'=>'Type','class'=>'form-control'])!!}
                    		</div>

                		{!!Form::close()!!}
					</div>

					<div class="modal-footer">
						{!!link_to('#',$title ='Actualizar',$attributes= ['id'=>'actualizar','class'=>'btn btn-info'],$secure = null)!!}
					</div>
		</div>
	</div>
</div>
