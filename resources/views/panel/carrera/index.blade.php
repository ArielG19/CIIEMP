
@extends('home')
@section('title', 'Listado de carreras')
@section('contenido')

@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>

@endif


<div class="container">
  <form>
    <div class="row">
      <div class="form-group col-lg-10">
        <table class="table table-striped">
          <thead>
  	         <th>Carrera</th>
             <th>Descripcion</th>
           </div>

           </thead>

              <tbody>
  	             <tr>
  		               @foreach ($carreras as $carrera)
  		                 <td>{{$carrera->carrera}}</td>
                       <td>{{$carrera->descripcion}}</td>

  		               <td>
                           <a class="btn btn-success" href="{{route('carrera.edit', $carrera->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		                      <a class="btn btn-danger" href="{{route('carrera.destroy', $carrera->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>

  		               </td>

  	         </tr>
  	          @endforeach
            </tbody>
          </table>
          </div>

{!! $carreras->render() !!}

  @endsection
