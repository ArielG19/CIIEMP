@extends('home')
@section('title','Chat')
@section('contenido')
                  <div class="col-sm-3">
                  <div class="well">
                    <ul class="list-group">
                          <li class="list-group-item">
                           <center><b>Conversaciones</b></center>
                          </li>

                          <li class="list-group-item">
                            <b>Tipo de Usuario:</b>
                            <span class="label label-default" style="padding: 5px 8px; position: absolute;margin-left:78px;"></span>
                          </li>
                          <li class="list-group-item">
                            <b>Nombre de Usuario:</b>
                            <span class="label label-default" style="padding: 5px 8px; position: absolute;margin-left:80px;"></span>
                          </li>
                          <li class="list-group-item">
                            <b>Correo:</b>
                            <span class="label label-default" style="padding: 5px 8px; position: absolute;margin-left:68px;"></span>
                          </li>
                    </ul>
                  </div>

                  </div>
                  <div class="col-sm-3">
                      <div class="form-group">
                        {!!Form::label('Usuarios','Enviar mensaje a:')!!}
                        {!!Form::select('usuarios',$users,null,['id'=>'usuario_to','class'=>'form-control select-user','multiple','required'])!!}
                      </div>
                  </div>
                  <div class="col-sm-5 col-sm-offset-left-1 frame" id="caja" >
                        <ul id="mensajes" class="lista"></ul>
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