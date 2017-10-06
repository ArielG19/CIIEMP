@foreach($comentarios as $c)
<<<<<<< HEAD
                 <article class="post">
                    <h4>
                      <img src="/perfil/{{$c->user->imagen}}" 
                      style="width: 42px; height: 42px;border-radius: 0%;margin-right:20px;"> 
                           {{$c->user->name}} 
                    </h4>
                    <p>
                        {{$c->comentario}}
                    </p>
                    <div class="info">
                          {{$c->created_at->diffForHumans()}}  
                          {{--Si el usuario auntentificado es el que creo el post--}}
                           @if(Auth::user() == $c->user)
                                <a href="#" data-toggle='modal' data-target='#editComentarioModal' Onclick='mostrarComentarios({{$c->id}});'>Edit</a>
                                <a href="#">Delete</a>
                            @endif

                    </div>
                    <hr>
                    
</article>
=======
    <article class="post">
        <h4>
            <img src="/perfil/{{$c->user->imagen}}"
                 style="width: 42px; height: 42px;border-radius: 0%;margin-right:20px;">
            {{$c->user->name}}
        </h4>
        <p>
            {{$c->comentario}}
        </p>
        <div class="info">
            {{$c->created_at->diffForHumans()}}
            {{--Si el usuario auntentificado es el que creo el post--}}
            @if(Auth::user() == $c->user)
                <a href="#" data-toggle='modal' data-target='#editComentarioModal'
                   Onclick='mostrarComentarios({{$c->id}});'>Edit</a>
                <a href="#">Delete</a>
            @endif

        </div>
        <hr>

    </article>
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
@endforeach
