<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>1.er Nombre</th>
				<th>1.er Apellido</th>
				<th>Publicado en</th>
				<th>Titulo del trabajo</th>
				<th>Opciones</th>
			</thead>
			<tbody>
						@foreach($publicaciones as $p)
							<tr>
								<td>
									{{$p->primer_nombre}}
								</td>
								<td>	
									{{$p->primer_apellido}}
								</td>
								<td>
									{{$p->publicado_en}}
								</td>
								<td>
									{{$p->titulo_trabajo}}
								</td>
																								
								<td>
				             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
				             		<a class="btn btn-info btn-sm" href="#" Onclick='Publicaciones({{$p->id}});' data-toggle='modal' data-target='#ModalEditar' style ="margin-right: 8px;">
				              			<i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i>
				              		</a>
				              		<a id="elim" class="btn btn-danger btn-sm" href="#" onclick="Eliminar('{{$p->id}}','{{$p->name}}')">
				                		<i class="fa fa-trash" aria-hidden="true"></i>
				              		</a>

				             	</td>
							</tr>
						@endforeach
			</tbody>
		</table>
		<center>
			<h4>{{--$user->render()--}}</h4>
		</center>

</div>