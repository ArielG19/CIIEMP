@extends('home')
@section('title','Perfil')
@section('contenido')
     <div class="row">
        <div class="col-md-10 col-md-offset-1">
                     
                  <img src="/perfil/{{$user->imagen}}" style="width: 250px; height: 250px; float: left;border-radius: 50%; margin-right: 25px;margin-top:20px;">

                  <div class="well" style="padding-top:400px;padding-left:40px;">
                    <form enctype="multipart/form-data" action="/mi-perfil" method="POST" style="margin-bottom:50px;">
                        <label for="">Actualizar imagen de perfil</label>
                        <input type="file" name="imagen">
                        <input type="hidden" name="_token" value="{{csrf_token ()}}">
                        <br>
                        <input type="submit" value="Actualizar" class="pull-left btn btn-sm btn-primary">
                    </form>

                  </div>
                  <div class="well col-md-4" style="float:right;margin-top:-535px;height:475px;">
                    <ul class="list-group">
                      <li class="list-group-item">
                       <center><b>Datos de Usuario</b></center>
                      </li>

                      <li class="list-group-item">
                        <b>Tipo de Usuario:</b>
                        <span class="label label-default" style="padding: 5px 8px; position: absolute;margin-left:78px;">{{ $user->type}}</span>
                      </li>
                      <li class="list-group-item">
                        <b>Nombre de Usuario:</b>
                        <span class="label label-default" style="padding: 5px 8px; position: absolute;margin-left:80px;">{{ $user->name}}</span>
                      </li>
                      <li class="list-group-item">
                        <b>Correo:</b>
                        <span class="label label-default" style="padding: 5px 8px; position: absolute;margin-left:68px;">{{ $user->email}}</span>
                      </li>
                      
                    </ul>
                  </div>
        </div>
  </div>
@endsection