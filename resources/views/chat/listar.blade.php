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
@endforeach



