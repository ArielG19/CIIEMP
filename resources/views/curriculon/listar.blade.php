<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Primer Nombre</th>
				<th>Primer Apellido</th>
				<th>Nacionalidad</th>
				<th>Opciones</th>
			</thead>
			<tbody>
						@foreach($curriculon as $c)
							<tr>
								<td>
									{{$c->primer_nombre}}
								</td>
								<td>	
									{{$c->primer_apellido}}
								</td>
								<td>
									{!!$c->nacionalidad!!}
								</td>
									
								<td>
				             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
				             		<a class="btn btn-info btn-sm" href="#" Onclick='DatosCurriculons({{$c->id}});' data-toggle='modal' data-target='#ModalEditar' style ="margin-right: 8px;">
				              			<i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i>
				              		</a>
				              		<a id="elim" class="btn btn-danger btn-sm" href="#" onclick="Eliminar('{{$c->id}}','{{$c->primer_nombre}} {{$c->primer_apellido}}')">
				                		<i class="fa fa-trash" aria-hidden="true"></i>
				              		</a>

				             	</td>
							</tr>
						@endforeach
			</tbody>
		</table>
</div>
<center>
			<h4>{{$curriculon->render()}}</h4>
</center>
