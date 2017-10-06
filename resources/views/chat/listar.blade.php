<<<<<<< HEAD
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
=======
@foreach($query2 as $q)  
    <li style="width:100%">
        <div class="msj macro"> 
                <div class="avatar">
                    
                    <img class="img-circle" style="width:100%;" src="/perfil/{{$q->imagen}}"/>
                </div>
            <div class="text text-l">
                    <p>{{$q->mensaje}}</p>
                    <p><small>{{date('g:i a ', strtotime($q->created_at))}}</small></p>
            </div>
        </div>
    </li>
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
@endforeach



<<<<<<< HEAD

=======
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
