<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content mod-yellow">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Agregar actor de publicacion</h4>
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
													{!!Form::select('usuario_id',$users,null,['id'=>'select_id','class'=>'form-control select-users','placeholder'=>'Seleccione un usuario','required'])!!}
												</div>


												<div class="form-group">
					                        		{!!form::label('publicado_en','Publicado por:')!!}
					                            	{!!form::text('publicado_en',null,['id'=>'publicado','class'=>'form-control','placeholder'=>'Escribe donde se publico'])!!}
					          					</div>

					                    		<div class="form-group">
					              					{!!form::label('fecha','Fecha:')!!}
					              					{!!form::date('fecha',null,['id'=>'fecha','class'=>'form-control'])!!}
					            				</div>

					            				<div class="form-group">
					              					{!!form::label('enlace','Enlace:')!!}
					              					{!!form::text('enlace',null,['id'=>'enlace','class'=>'form-control','placeholder'=>'Escriba el enlace'])!!}
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


 <script>
        $('.select-users').chosen({
          no_results_text:'No se encontraron resultados',
        });
      </script>
