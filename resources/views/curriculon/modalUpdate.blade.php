<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Editar curriculon</h4>
							</div>

							<div class="modal-body">
								<div>
									  <ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#primer" aria-controls="primer" role="tab" data-toggle="tab">Primer parte</a></li>
									    <li role="presentation"><a href="#segundo" aria-controls="segundo" role="tab" data-toggle="tab">Parte final </a></li>
									  </ul>

									  <!-- Tab panes -->
									  <div class="tab-content">
									    <div role="tabpanel" class="tab-pane active" id="primer">
													{{--creamos un alert--}}
												<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
														<strong id="error"></strong>
												</div>

												{!!Form::open(['id'=>'form'])!!}
												<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
												<input type="hidden" id="id">

							                    <div class="form-group">
													{!!Form::label('usuario_id','Seleccione una persona')!!}
													{!!Form::select('usuario_id',$users,null,['id'=>'select_id_edit','class'=>'form-control select-users','placeholder'=>'Seleccione un usuario','required'])!!}
												</div>
												<br><br><br>


												<div class="form-group">
					                        		{!!form::label('resumen','Resumen corto:')!!}
					                            	{!!form::textarea('resumen',null,['class'=>'form-control','id'=>'resumen_edit'])!!}
					          					</div>

					                    		<div class="form-group">
					              					{!!form::label('Titulos academicos:')!!}
					              					{!!form::textarea('titulos_academicos',null,['id'=>'titulos_aca_edit','class'=>'form-control','placeholder'=>'Escriba sus titulos academicos'])!!}
					            				</div>

					            				<div class="form-group">
					              					{!!form::label('Estudios doctorales:')!!}
					              					{!!form::textarea('estudios_doctorales',null,['id'=>'estudios_doc_edit','class'=>'form-control','placeholder'=>'Escriba sus estudios doctorles'])!!}
					            				</div>
									    </div>
									    <div role="tabpanel" class="tab-pane" id="segundo">
												<div class="form-group">
					              					{!!form::label('Experiencias laborales:')!!}
					              					{!!form::textarea('experiencia_laboral',null,['id'=>'experiencia_edit','class'=>'form-control','placeholder'=>'Escriba sus experiencias laborales'])!!}
				            					</div>

					            				<div class="form-group">
					              					{!!form::label('Nacionalidad:')!!}
					              					{!!form::text('nacionalidad',null,['id'=>'nacionalidad_edit','class'=>'form-control','placeholder'=>'Escriba su nacionalidad'])!!}
					            				</div>

					            				<div class="form-group">
					              					{!!form::label('Direccion:')!!}
					              					{!!form::text('direccion',null,['id'=>'direccion_edit','class'=>'form-control','placeholder'=>'Escriba su direccion'])!!}
					            				</div>

					                    		<div class="form-group">
					                        		{!!Form::label('Estado civil')!!}
					                        		{!!Form::select('estado_civil',['solter@'=>'Soltero(a)','casad@'=>'Casado(a)'],null,['id'=>'estado_ci_edit','class'=>'form-control'])!!}
					                    		</div>
					                    		
												{!!link_to('#',$title ='actualizar',$attributes= ['id'=>'actualizar','class'=>'btn btn-info'],$secure = null)!!}
		                						{!!Form::close()!!}
									    </div>
									  </div>

								</div>
		            		</div>

							<div class="modal-footer">
								
							</div>
					</div>
				</div>
</div>
 <script>
        $('.select-users').chosen({
          no_results_text:'No se encontraron resultados',
        });
</script>

