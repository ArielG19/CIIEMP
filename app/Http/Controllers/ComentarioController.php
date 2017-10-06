<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\User;
use App\Blog;
use DB;
use Auth;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function listarComentarios($id_b)
    {
            //$comment = DB::select("select * from comentarios where id_blog = '$id_b'");

<<<<<<< HEAD
            $comentarios = Comentario::orderBy('id','desc')->where('id_blog',$id_b)->get();        
=======
            $comentarios = Comentario::orderBy('id','asc')->where('id_blog',$id_b)->get();
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
            $comentarios->each(function($comentarios){
                $comentarios->user;
                $comentarios->blog;
                //dd($comentarios->user);
                                
            });
                            
<<<<<<< HEAD
            dd($comentarios);
=======
            //dd($comentarios);
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
            return view('comentarios.listar')->with('comentarios',$comentarios);

            
      
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

         if($request->ajax()){

            $comentarios = new Comentario();
            $comentarios->comentario = $request->comentario;
            $comentarios->id_blog = $request->id_b;
            $comentarios->id_usuario = \Auth::user()->id;
            $comentarios->save();
            //dd($comentarios);
            
            //si no hay error entonces
            if($comentarios){

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
        $comentarios = Comentario::FindOrFail($id);            
        return response()->json($comentarios);

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

                $comentarios =Comentario::FindOrFail($id);
                //en input amacenamos toda la info del request
                $input = $request->all();
                $resultado = $comentarios->fill($input)->save();

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
    }
}
