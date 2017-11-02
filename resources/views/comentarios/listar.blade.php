@foreach($comentarios as $c)

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
            {{date('g:i a ', strtotime($c->created_at))}}
            {{--Si el usuario auntentificado es el que creo el post--}}
            @if(Auth::user() == $c->user)
                <a href="#" data-toggle='modal' data-target='#editComentarioModal'
                   Onclick='mostrarComentarios({{$c->id}});'>Editar</a>
        
                <a id="elim" href="#" onclick="Eliminar('{{$c->id}}')">Elimnar
                     <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            @endif

        </div>
        <hr>

    </article>
@endforeach
