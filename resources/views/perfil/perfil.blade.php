@extends('home')
@section('title','Perfil')
@section('contenido')
  <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-heading">
              Mi Perfil: {{ $user->name}}
              </div>
              <div class="panel-body">
                  <img src="/perfil/{{$user->imagen}}" style="width: 250px; height: 250px; float: left;border-radius: 50%; margin-right: 25px;">

                  <div style="padding-top:250px;padding-left:40px;">
                    <form enctype="multipart/form-data" action="/mi-perfil" method="POST">
                        <label for="">Actualizar imagen de perfil</label>
                        <input type="file" name="imagen">
                        <input type="hidden" name="_token" value="{{csrf_token ()}}">
                        <br>
                        <input type="submit" value="Actualizar" class="pull-left btn btn-sm btn-primary">
                    </form>

                  </div>
               </div>
          </div>
        </div>
  
  </div>
</div>
@endsection