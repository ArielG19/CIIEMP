<div class="table-responsive">
		<table class="table table-striped">
			<thead>
<<<<<<< HEAD
				<th>Nombre</th>
				<th>Publicacion</th>
=======
				<th>Primer Nombre</th>
				<th>Primer Apellido</th>
				<th>Publicado en</th>
				<th>Título del trabajo</th>
>>>>>>> 07abda6efde90ca765d53daf72b054590919f326
				<th>Opciones</th>
			</thead>
			<tbody>
						@foreach($publicaciones as $p)
							<tr>
								<td>
<<<<<<< HEAD
									{{$p->primer_nombre}} {{$p->primer_apellido}}
								</td>
								<td>
									{!!$p->publicacion!!}
								</td>																							
=======
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

>>>>>>> 07abda6efde90ca765d53daf72b054590919f326
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
