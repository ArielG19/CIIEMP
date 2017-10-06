@foreach($message as $m)
Envio: {{$m->name}} <br>
Mensaje: {{$m->mensaje}} <br>
ConversacionID: {{$m->conversation_id}} <br><br>
@endforeach