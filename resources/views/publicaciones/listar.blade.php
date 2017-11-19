<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Nombre</th>
				<th>Publicacion</th>
				<th>Opciones</th>
			</thead>
			<tbody>
						@foreach($publicaciones as $p)
							<tr>
								<td>
									{{$p->primer_nombre}} {{$p->primer_apellido}}
								</td>
								<td>
									{!!$p->publicacion!!}
								</td>																							
								<td>
				             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
				             		<a class="btn btn-info btn-sm" href="#" Onclick='Publicaciones({{$p->id}});' data-toggle='modal' data-target='#ModalEditar' style ="margin-right: 8px;">
				              			<i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i>
				              		</a>
				              		<a id="elim" class="btn btn-danger btn-sm" href="#" onclick="Eliminar('{{$p->id}}','{{$p->primer_nombre}} {{$p->primer_apellido}}')">
				                		<i class="fa fa-trash" aria-hidden="true"></i>
				              		</a>

				             	</td>
							</tr>
						@endforeach
			</tbody>
		</table>
</div>

<center>
	<h4>{{$publicaciones->render()}}</h4>
</center>
