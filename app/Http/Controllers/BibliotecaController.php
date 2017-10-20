<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Biblioteca;
use App\Categoria;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use Redirect;
use DB;

class BibliotecaController extends Controller
{
    public function downfunc(Request $request)
    {

      $downloads =Biblioteca::Search($request->titulo)->orderBy('id','DESC')->paginate(16);
      return view('Biblioteca.index', compact('downloads'));


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $biblios = Biblioteca::orderBy('id','DESC')->paginate(5);
      return view('panel.biblioteca.index', compact('biblios'));
    }

    public function filtraCategoria($name)
    {

        $categoria = Categoria::SearchCategory($name)->first();
        $downloads = $categoria->biblios()->paginate(4);




        return view('Biblioteca.index',compact('downloads'));
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
      Session::flash('message','El archivo se ha subido correctamente');
      return redirect::to('home/bibliotecas');

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
      $users = User::pluck('name', 'id');
      $categorias =Categoria::pluck('name', 'id');


      $biblio = Biblioteca::find($id);

      return view('panel.biblioteca.edit',compact('users','categorias','biblio'));
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
      $biblio = Biblioteca::find($id);
      $biblio->  fill($request->all());
      $biblio->save();



      $biblio->save();
      Session::flash('message','El archivo de la biblioteca se ha editado Correctamente');
      return redirect::to('home/bibliotecas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $file = Biblioteca::findOrFail($id);
      $file_path = public_path('download/pdf').'/'.$file->path;
      unlink($file_path);
      $file->delete();
      Session::flash('message','El archivo de la biblioteca se ha eliminado Correctamente');
      return redirect::to('home/bibliotecas') ;
    }
}
