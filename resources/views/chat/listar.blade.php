@foreach($message as $m)
    
        <ul class="lista">
                <li style="width:100%">
                    <div class="msj macro"> 
                            <div class="avatar">
                                <img class="img-circle" style="width:100%;" src="/perfil/{{$m->imagen}}"/>
                            </div>
                        <div class="text text-l">
                                <p>{{$m->mensaje}}</p>
                                <p><small>{{--date('g:i a ', strtotime($m->created_at))--}}</small></p>
                        </div>
                    </div>
                </li>
            </ul>
@endforeach

