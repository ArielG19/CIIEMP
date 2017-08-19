<div class="row">
<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalComentario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content mod-yellow">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span> 
									</button>
									<h4 class="modal-title" id="myModalLabel">Agregar nuevo comentario</h4>
							</div>

							<div class="modal-body">
								{{--creamos un alert--}}
								<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none;"><strong id="error"></strong>
								</div>
								
								{{--cremos el formulario con un id para usar ajax--}}
								{!!Form::open(['id'=>'form'])!!}
									<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
									<input type="hidden" id="id">

									 <div class="form-group">
		                            	{!!form::textarea('comentario',null,['id'=>'comentario','class'=>'form-control','rows'=>'4','placeholder'=>'Escribe un comentario'])!!}
		          					</div>
		          					<div class="form-group">
										{!! Form::hidden('id_blog',$blogs->id,null,['id'=>'id_blogs','class' =>'form-control'])!!}
									</div>	                    		
		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'guardarComentario','class'=>'btn btn-info btn-sm'],$secure = null)!!}
							</div>		
					</div>
				</div>
		</div>
</div>
</div>