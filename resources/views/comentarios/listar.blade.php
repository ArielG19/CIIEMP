@foreach($comentarios as $c)
                 <article class="post">
                    <h4><i class="fa fa-user"></i> {{$c->user->name}}</h4>
                    <p>
                        {{$c->comentario}} <h4>id:{{$c->id_blog}} publicacion</h4>
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
@endforeach
