<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content mod-yellow">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Editar actor de publicacion</h4>
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
													{!!Form::label('usuario_id','Seleccione persona')!!}
													{!!Form::select('usuario_id',$users,null,['id'=>'select_id_edit','class'=>'form-control select-users','placeholder'=>'Seleccione un usuario','required'])!!}
												</div>

												<div class="form-group">
					                        		{!!form::label('publicacion','Publicacion:')!!}
					                            	{!!form::textarea('publicacion',null,['id'=>'publicacion_edit','class'=>'form-control'])!!}
					          					</div>
		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Editar',$attributes= ['id'=>'editar','class'=>'btn btn-info'],$secure = null)!!}
							</div>
					</div>
				</div>
	</div>
</div>
