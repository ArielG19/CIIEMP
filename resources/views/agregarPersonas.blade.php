@extends('home')

@section('contenido')
  <div class="container">
    <form>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Nombres</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombres">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Primer Apellido</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Primer Apellido">
        </div>
      </div>
       <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Segundo Apellido</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Segundo Apellido">
        </div>
      </div>
       <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Descripcion</label>
          <textarea name="" id="" cols="50" rows="5" placeholder="Descripcion" class="form-control"></textarea>
        </div>
      </div>
      <!--<div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputFile">Subir Archivo</label>
          <input type="file" id="exampleInputFile">
          <p class="help-block">Foto</p>
        </div>
      </div>
      -->
    <div class="row">
      <div class="form-group col-md-6">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>  
            Profesor
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Administrador
          </label>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <button type="submit" class="btn btn-default">Guardar Datos</button>
      </div>
    </div>
    </form>
  </div>
  @endsection