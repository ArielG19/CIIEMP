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
                <a href="#" data-toggle='modal' data-target='#editComentarioModal'
                   Onclick='mostrarComentarios({{$c->id}});'>Edit</a>
                <a href="#">Delete</a>
            @endif

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

>>>>>>> 53212f1e893b5ba1968feabf46ee055168198fa7
        </div>
        <hr>

    </article>
@endforeach
