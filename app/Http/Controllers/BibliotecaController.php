<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Biblioteca;
use App\Categoria;
use Illuminate\Http\Request;
use DB;

class BibliotecaController extends Controller
{
    public function downfunc()
    {
      $downloads=DB::table('bibliotecas')
      ->join('categorias', 'bibliotecas.id_categoria', '=', 'categorias.id')
      ->select('titulo','path','descripcion','categorias.name')
      ->get();
    	return view('Biblioteca.index',compact('downloads'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categorias = Categoria::pluck('name','id');
      return view('panel.biblioteca.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $biblio = new Biblioteca($request->all());


      $biblio->save();
      
      return redirect::to('bibliotecas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
