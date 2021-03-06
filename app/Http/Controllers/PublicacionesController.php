<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicaciones;
use DB;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')->where('type','profesor')->Orderby('name','desc')->pluck('name','id');
        return view('publicaciones.index')->with('users',$users);
    }

    public function publicaciones()
    {
         $publicaciones = DB::table('users')
        ->Join('publicaciones','users.id','publicaciones.id_autor')
        ->Join('teachers','users.id','teachers.id_usuario')
        ->select('users.name','teachers.primer_nombre','teachers.primer_apellido','publicaciones.publicacion','publicaciones.id')
        ->Orderby('publicaciones.id','desc')
        ->paginate(7);

        //dd($publicaciones);
        return view('publicaciones.listar')->with('publicaciones',$publicaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        if($request->ajax())
        {
                    $publicacion = new Publicaciones();
                    $publicacion->id_autor = $request->id;
                    $publicacion->publicacion = $request->publicacion;                    
                    $publicacion->save();
                
                //si no hay error entonces
                if($publicacion){
                    //Session::flash('save','Se ha creado correctamente');
                    return response()->json(['success'=>'true']);
                }else{
                    return response()->json(['success'=>'false']);
                }

        }
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
        $publicaciones = Publicaciones::FindOrFail($id);
        return response()->json($publicaciones);
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
        if($request->ajax()){
                $publicaciones = Publicaciones::FindOrFail($id);
                $input = $request->all();
                $resultado = $publicaciones->fill($input)->save();

                if($resultado){
                    return response()->json(['success'=>'true']);
                }else{
                    return response()->json(['success'=>'false']);
                }
        }
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
                $publicaciones = Publicaciones::FindOrFail($id);
                
                $resultado = $publicaciones->delete();

                if($resultado)
                {
                    return response()->json(['success'=>'true']);
                }else
                {
                    return response()->json(['success'=>'false']);
                }
    }
}
