@foreach($message as $m)

	@if(Auth::user()->name == $m->receptor)
		<img src="/perfil/{{$m->emisorImg}}" style="width: 42px; height: 42px;top: 8px; left:25px;border-radius: 50%">
		<b style="margin-left: 10px;">{{$m->emisor}}</b>
		<a class="btn" id="a-nombre" style="margin-left: 15px;" data-id="{{$m->conversation_id}}">
		 	Mensajes ({{$m->mensajes}}) 
		</a> 
		<a style="margin-left: 15px;" href="#" onclick="Eliminar('{{$m->conversation_id}}')">
				   Eliminar <i class="fa fa-trash"></i>
		</a>
		<hr width="200px" style="border:1px solid lightgrey">
		<br>
	@elseif(Auth::user()->name == $m->emisor)
		<img src="/perfil/{{$m->receptorImg}}" style="width: 42px; height: 42px;top: 8px; left:25px;border-radius: 50%">
		<b style="margin-left: 10px;">{{$m->receptor}}</b>
		<a class="btn" id="a-nombre" style="margin-left: 15px;" data-id="{{$m->conversation_id}}">
		 	Mensajes ({{$m->mensajes}}) 
		</a> 
		<a style="margin-left: 15px;" href="#" onclick="Eliminar('{{$m->conversation_id}}')">
				   Eliminar <i class="fa fa-trash"></i>
		</a>
		<hr width="200px" style="border:1px solid lightgrey">
		<br>
	@endif

@endforeach
<script type="text/javascript" src="{{asset('/js/Chat/chatUsuarios.js')}}"></script>