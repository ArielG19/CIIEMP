	            @foreach($chats as $chat)
	           
	            	<li style="width:100%">
	                    <div class="msj macro"> 
	                        <div class="avatar">
	                            <img class="img-circle" style="width:100%;" src="/perfil/{{$chat->imagen}}"/>
	                        </div>
	                        <div class="text text-l">
	                               <p id="parrafo">{{$chat->mensaje}}</p>
	                               <p id="parrafo">{{date('g:i a ', strtotime($chat->created_at))}}</p>
	                        </div>
	                    </div>
	                </li>
	             
	             @endforeach

