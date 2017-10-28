@extends('home')
@section('title','Perfil')
@section('contenido')
<div class="container">
  	  <div class="row">
         <div class="col-md-10 col-md-offset-1 ">
            <div class="panel panel-default">
                <div class="panel-heading">  <h4 >Perfil de {{$user->name}}</h4></div>
                <div class="panel-body">
                    <div class="box box-info">
                      <div class="box-body">
                              <div class="col-sm-6">
                                 <form enctype="multipart/form-data" action="mi-perfil" method="POST">
                                    <div  align="center"> 
                                      <img alt="User Pic" src="/perfil/{{$user->imagen}}" id="profile-image1" class="img-circle img-responsive">
                                      <input type="hidden" name="_token" value="{{csrf_token ()}}">
                                      <input type="file" name="imagen" id="btn1">
                                      <input type="submit" value="Actualizar" class="btn btn-sm btn-info" id="btn1">
                                          
                                    </div>
                                 </form>
                                  <br>
                              </div>
                                <!-- /input-group -->
                              <div class="col-sm-6">
                                  <h4 style="color:#00b1b1;">Nombre de usuario: </h4>
                                    <p><span class="label label-default">{{$user->name}}</span></p>
                                  <h4 style="color:#00b1b1;">Correo: </h4>
                                    <p><span class="label label-default">{{$user->email}}</span></p>
                                  <h4 style="color:#00b1b1;">Tipo de usuario: </h4>
                                    <p><span class="label label-default">{{$user->type}}</span></p>
                              </div>
                              <div class="clearfix"></div>
                              <hr style="margin:5px 0 5px 0;">

                              {{--Listar datos de estudiante--}}
                              <div class="form-group">
                                 {!!Form::hidden('id',$user->id,null,['id'=>'id','class' =>'form-control'])!!}
                              </div>
                              <h4>Completar datos personales</h4>
                               @if ($user->type == "estudiante")
                                  <div id="listar-Est"></div>
                                  
                                  <a class="btn btn-info btn-sm" href="#" Onclick='DatosUsuario({{$user->id}});' data-toggle='modal' data-target='#myModalUpdateEst'>
                                   <i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i>
                                  </a>
                                @include('perfil.modalUpdateEst')

                                {{--Listar datos de estudiante--}}
                                @elseif($user->type == "profesor")
                                    <div id="listar-Prof"></div>
                                    
                                    <a class="btn btn-info btn-sm" href="#" Onclick='MostrarDatosProf({{$user->id}});'      data-toggle='modal' data-target='#myModalUpdateProf'>
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i>
                                    </a>
                                    @include('perfil.modalUpdateProf')
                                @endif
                          
                      </div>
                         <!-- /.box-body -->
                    </div>
                </div>
            </div>
          </div>
      </div>
</div>
@section('script')
    <script type="text/javascript" src="{{asset('/js/estudiante.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/datosProfesor.js')}}"></script>
  @endsection
@endsection
