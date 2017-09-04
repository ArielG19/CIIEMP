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

                         <form enctype="multipart/form-data" action="/mi-perfil" method="POST">
                         <div  align="center"> <img alt="User Pic" src="/perfil/{{$user->imagen}}" id="profile-image1" class="img-circle img-responsive">


                           <input type="hidden" name="_token" value="{{csrf_token ()}}">
                           {{--

                            <input type="file" name="imagen" id="btn1">

                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary" id="btn1">
                            --}}
                         </form>

                               <!--Upload Image Js And Css-->
                        </div>

                        <br>

                       </div>
              <!-- /input-group -->
              <div class="col-sm-6">
              <h4 style="color:#00b1b1;">Nombre de usuario: </h4></span>
                <span><p><span class="label label-default">{{$user->name}}</p></span>
              <h4 style="color:#00b1b1;">Correo: </h4></span>
                  <span><p><span class="label label-default">{{$user->email}}</p></span>
                  <h4 style="color:#00b1b1;">Tipo de usuario: </h4></span>
                      <span><p><span class="label label-default">{{$user->type}}</p></span>



              </div>
              <div class="clearfix"></div>
              <hr style="margin:5px 0 5px 0;">

@if ($user->type == "estudiante")
  <div class="col-sm-5 col-xs-6 tital " >Carnet:</div><div class="col-sm-7 col-xs-6 "></div>
       <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Nombre:</div><div class="col-sm-7"></div>
    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Segundo Nombre:</div><div class="col-sm-7"></div>
    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Apellido:</div><div class="col-sm-7"></div>
    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Segundo Apellido:</div><div class="col-sm-7"></div>

    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Telefono:</div><div class="col-sm-7"><span class="label label-default"></span></div>

    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Carrera:</div><div class="col-sm-7"><span class="label label-default"></span></div>

    <div class="clearfix"></div>
  <div class="bot-border"></div>
  @include('perfil.modalUpdateEstudiante')

@elseif ($user->type == "profesor")

  <div class="col-sm-5 col-xs-6 tital " >Nombre:</div><div class="col-sm-7"><span class="label label-default">{{$user->profesors->primer_nombre}}</span></div>
    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Segundo Nombre:</div><div class="col-sm-7"><span class="label label-default">{{$user->profesors->segundo_nombre}}</span></div>
    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Apellido:</div><div class="col-sm-7"><span class="label label-default">{{$user->profesors->primer_apellido}}</span></div>
    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Segundo Apellido:</div><div class="col-sm-7"><span class="label label-default">{{$user->profesors->segundo_apellido}}</span></div>

    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Telefono:</div><div class="col-sm-7"><span class="label label-default">{{$user->profesors->telefono}}</span></div>

    <div class="clearfix"></div>
  <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Profesion:</div><div class="col-sm-7"><span class="label label-default"></span></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>
@include('perfil.modalUpdateProfesor')
@endif
<input href="#" type="submit" value="Actualizar" Onclick='MostrarUsuario({{$user->id}});' data-toggle='modal' data-target='#myModal' class="btn btn-sm btn-info pull-right" id="btn1">









              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      </div>
     </div>
  </div>



 </div>
</div>


@endsection
