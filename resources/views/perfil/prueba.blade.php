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
                              <div class="clearfix"></div>
                              <hr style="margin:5px 0 5px 0;">
                              <div class="form-group">
                                 {!!Form::hidden('id',$user->id,null,['id'=>'id','class' =>'form-control'])!!}
                              </div>
                              @if ($user->type == "estudiante")
                                <div id="listar-Est">
                                </div>
                               
                                <a class="btn btn-info btn-sm" href="#" Onclick='DatosUsuario({{$user->id}});' data-toggle='modal' data-target='#myModalcreateEst'>
                                 <i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i>
                                </a>
                              @include('perfil.modalCreateEst')
                          @elseif($user->type == "profesor")
                                
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
    <script type="text/javascript" src="{{asset('/js/perfil.js')}}"></script>
  @endsection
@endsection