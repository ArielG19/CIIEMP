@extends('home')
@section('title','Curriculon')
@section('contenido')
       <div class="col-xs-12">
                          <div id="message-save" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            <strong> Se agrego correctamente</strong>
                          </div>

                          <div id="message-update" class="alert alert-info alert-dismissible" role="alert" style      ="display:none">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong> Se actualizo correctamente</strong>
                          </div>

                            <div class="panel panel-primary">
                                  <div class="panel-heading">
                                        <h5 class="panel-title">Lista de curriculons</h5>
                                  </div>
                                  <div class="panel-body">
                                      <hr>
                                      <p class="navbar-text navbar-right" style="margin-right:15px; margin-top:-53px;">
                                          <a class="btn btn-info btn-sm" href="#myModal" data-toggle='modal' data-target='#myModal'>
                                            <span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                          </a>
                                      </p>
                                      <div id="listar-curriculon"></div>
                                  </div>
                            </div>
        </div>
@include('curriculon.modalCreate')
@include('curriculon.modalUpdate')  
  @section('script')
           <script type="text/javascript" src="{{asset('/js/curriculon.js')}}"></script>
  @endsection

@endsection

  