@extends('layouts.chat')
@section('title','Chat')
@section('contenido')
                  <div class="col-sm-4">
                      <center> <h3><span class="label label-default">Lista de mensajes</span></h3> </center>
                      <div class="well"> 
                          <ul class="list-group" id="scroll">
                              <div id="mensajes"></div>
                          </ul>       
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-group">
                        <center> <h3><span class="label label-default">Enviar a: </span></h3> </center>
                        {!!Form::select('usuarios',$users,null,['id'=>'usuario_to','class'=>'form-control select-user','multiple','required'])!!}
                        {!!Form::hidden('usuario',Auth::user()->id,null,['id'=>'usuario_id','class'=>'form-control'])!!}
                      </div>
                  </div>

                  <center> <h3><span class="label label-default">Escriba su mensaje: </span></h3> </center>

                      <div class="col-sm-4 col-sm-offset-left-1 frame" id="caja" >
                          <div id="chats"></div>
                              <div class="msj-rta macro">                        
                              </div>
                         
                      </div>
                      <div class="text text-r" >
                                      {!!Form::open(['id'=>'form'])!!}
                                              <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                                              <input type="hidden" id="id">
                                             
                                                 {!!form::text('mensaje',null,['id'=>'mensaje','class'=>'mytext','placeholder'=>'Escribe un mensaje...'])!!}
                                         
                                                {!!link_to('#',$title ='',$attributes= ['id'=>'Enviar','class'=>'glyphicon glyphicon-send btn btn-default btn-sm-mt-10'],$secure = null)!!}                                   
                                       {!!Form::close()!!}
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
                    $("#scroll").scroll(function(){
                      
                    });

                });
                </script>

                <script type="text/javascript" src="{{asset('/js/Chat/chats.js')}}"></script>
                <script type="text/javascript" src="{{asset('/js/Chat/chatUsuarios.js')}}"></script>
                
            @endsection
@endsection