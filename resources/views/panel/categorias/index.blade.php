@extends('home')
@section('title', 'Listado de categorias')
@section('contenido')

    @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>

    @endif


    <div class="container">
        <form>
            <div class="row">
                <div class="form-group col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <th>Nombre</th>
                            <th>Acciones</th>


                            </thead>

                            <tbody>
                            <tr>
                                @foreach ($categorias as $categoria)
                                    <td>{{$categoria->name}}</td>

                                    <td>
                                        <a class="btn btn-success" href="{{route('categoria.edit', $categoria->id)}}"
                                           role="button"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-danger" href="{{route('categoria.destroy', $categoria->id)}}"
                                           onclick="return confirm('Quiere borrar el registro?')" role="button"><i
                                                    class="fa fa-trash-o"></i></a>
                                    </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

    {!! $categorias->render() !!}

@endsection
