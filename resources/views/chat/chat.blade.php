@extends('home')
@section('title','Chat')
@section('contenido')
                  <div class="col-sm-4">
<<<<<<< HEAD
                    <div class="well"> 
                        <ul class="list-group">
                            <div id="mensajes"></div>
                        </ul>       
=======
                    <div class="well">
                        <ul class="list-group">
                            <li class="list-group-item">
                              <center><b>Conversaciones</b></center>
                            </li>
                            
                            <ul class="lista list-group">  
                            </ul>
                        </ul>
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
                    </div>
                  </div>
                  <div class="col-sm-2">
                      <div class="form-group">
                        {!!Form::label('Usuarios','Enviar mensaje a:')!!}
                        {!!Form::select('usuarios',$users,null,['id'=>'usuario_to','class'=>'form-control select-user','multiple','required'])!!}
                        {!!Form::hidden('usuario',Auth::user()->id,null,['id'=>'usuario_id','class'=>'form-control'])!!}
                      </div>
                  </div>
                  <div class="col-sm-5 col-sm-offset-left-1 frame" id="caja" >
<<<<<<< HEAD
                        
=======
                        <ul id="mensajes" class="lista"></ul>
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
                      <div>
                          <div class="msj-rta macro" style="margin:auto">                        
                              <div class="text text-r" >
                              {!!Form::open([])!!}
                                      <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                                      <input type="hidden" id="id">
                                     
                                         {!!form::text('mensaje',null,['id'=>'mensaje','class'=>'mytext','placeholder'=>'Escribe un mensaje...'])!!}
                                 
                                        {!!link_to('#',$title ='',$attributes= ['id'=>'Enviar','class'=>'glyphicon glyphicon-send btn btn-default btn-sm-mt-10'],$secure = null)!!}
                                                                               
                               {!!Form::close()!!}

                              </div> 
                          </div>
                      </div>
                    </div>
            @section('script')
                <script>
                $('.select-user').chosen({
                  placeholder_text_multiple:'Seleccione un usuario...',
                  max_selected_options:1,
                  search_contains:true,
                  no_results_text:'No se encontraron resultados',
                });

                $(function() {
                    $("#caja").scroll(function(){
                      
                    });
                });
                </script>
               <script type="text/javascript" src="{{asset('/js/chats.js')}}"></script>
            @endsection
@endsection