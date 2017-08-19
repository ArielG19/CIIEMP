<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Nombre</th>
				<th>Email</th>
				<th>Tipo</th>
				<th>Opciones</th>
			</thead>
			<tbody>
						@foreach($users as $user)
							<tr>
								<td>
									{{$user->name}}
								</td>
								<td>
									{{$user->email}}
								</td>
								
								<td>
									{{$user->type}}</span>
								</td>									
								<td>
				             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
				             		<a class="btn btn-info btn-sm" href="#" Onclick='MostrarUsuario({{$user->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
				              			<i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i>
				              		</a>
				              		<a id="elim" class="btn btn-danger btn-sm" href="#" onclick="Eliminar('{{$user->id}}','{{$user->nombre}}')">
				                		<i class="fa fa-trash" aria-hidden="true"> Eliminar</i>
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
