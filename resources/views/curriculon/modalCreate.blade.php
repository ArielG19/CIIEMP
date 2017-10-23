<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document" style="margin-left:300px;">
					<div class="modal-content">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Agregar curriculon</h4>
							</div>

							<div class="modal-body">
								<div>
									  <ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Primer parte</a></li>
									    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Parte final </a></li>
									  </ul>

									  <!-- Tab panes -->
									  <div class="tab-content">
									    <div role="tabpanel" class="tab-pane active" id="home">
													{{--creamos un alert--}}
												<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
														<strong id="error"></strong>
												</div>

												{!!Form::open(['id'=>'form'])!!}
												<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
												<input type="hidden" id="id">

							                    <div class="form-group">
													{!!Form::label('usuario_id','Seleccione una persona')!!}
													{!!Form::select('usuario_id',$users,null,['id'=>'select_id','class'=>'form-control select-users','placeholder'=>'Seleccione un usuario','required'])!!}
												</div>
												<br><br><br>


												<div class="form-group">
					                        		{!!form::label('Resumen corto:')!!}
					                            	{!!form::textarea('resumen',null,['id'=>'resumen','class'=>'form-control','placeholder'=>'Escribe un resumen corto'])!!}
					          					</div>

					                    		<div class="form-group">
					              					{!!form::label('Titulos academicos:')!!}
					              					{!!form::textarea('titulos_academicos',null,['id'=>'titulos_aca','class'=>'form-control','placeholder'=>'Escriba sus titulos academicos'])!!}
					            				</div>

					            				<div class="form-group">
					              					{!!form::label('Estudios doctorales:')!!}
					              					{!!form::textarea('estudios_doctorales',null,['id'=>'estudios_doc','class'=>'form-control','placeholder'=>'Escriba sus estudios doctorles'])!!}
					            				</div>
									    </div>
									    <div role="tabpanel" class="tab-pane" id="profile">
												<div class="form-group">
					              					{!!form::label('Experiencias laborales:')!!}
					              					{!!form::textarea('experiencia_laboral',null,['id'=>'experiencia','class'=>'form-control','placeholder'=>'Escriba sus experiencias laborales'])!!}
				            					</div>

					            				<div class="form-group">
					              					{!!form::label('Nacionalidad:')!!}
					              					{!!form::text('nacionalidad',null,['id'=>'nacionalidad','class'=>'form-control','placeholder'=>'Escriba su nacionalidad'])!!}
					            				</div>

					            				<div class="form-group">
					              					{!!form::label('Direccion:')!!}
					              					{!!form::text('direccion',null,['id'=>'direccion','class'=>'form-control','placeholder'=>'Escriba su direccion'])!!}
					            				</div>

					                    		<div class="form-group">
					                        		{!!Form::label('Estado civil')!!}
					                        		{!!Form::select('estado_civil',['solter@'=>'Soltero(a)','casad@'=>'Casado(a)'],null,['id'=>'estado_ci','class'=>'form-control'])!!}
					                    		</div>
					                    		
												{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'guardar','class'=>'btn btn-info'],$secure = null)!!}
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
