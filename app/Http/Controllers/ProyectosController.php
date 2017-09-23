<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Biblioteca;
use App\Proyecto;
use App\Categoria;
use App\User;
use App\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use Redirect;
use DB;
use Image;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function frontProyecto(){
        $proyectos = Proyecto::orderBy('id','DESC')->paginate(5);
        return view('proyectos.indexPrincipal',compact('proyectos'));
    }

    public function index()
    {

        $proyect =Proyecto::orderBy('id','DESC')->paginate(5);
        return view('proyectos.index', compact('proyect'));


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

        $profesor = Profesor::selectRaw('id, CONCAT(primer_nombre," ",segundo_nombre," ",primer_apellido," ",segundo_apellido) as full_name')->where('primer_nombre','!=','','or','primer_apellido','!=','','or','primer_apellido','!=','')->pluck('full_name', 'id');
       
        return view('proyectos.create',compact('categorias','profesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $proyect = new Proyecto($request->all());

        if($request->input('txtresponsable') == null){

                $proyect->responsable = $request->id_profesor;
        }
        else{
            
        }

        if ($request->hasFile('imagen')) {
          $imagen = $request->file('imagen');
          $filename= time(). '.' .$imagen->getClientOriginalExtension();
          Image::make($imagen)->resize(1000, 500)->save(public_path('images/'.$filename));
          $proyect->imagen=$filename;
          $proyect->save();
        }else {
          $proyect->path = null;
          $proyect->save();
        }

        Session::flash('message','Proyecto publicado correctamente');
        return redirect::to('home/proyectos');

        //return redirect::to('bibliotecas');
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
        $proyecto = Proyecto::find($id);

        return view("proyectos.detalleProyecto", compact('proyecto'));
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
