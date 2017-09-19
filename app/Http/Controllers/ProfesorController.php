<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
use DB;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function listarProfesor($id)
    {
        $profesor = DB::table('profesors')
                    ->select('profesors.primer_nombre','profesors.segundo_nombre','profesors.primer_apellido','profesors.segundo_apellido','profesors.descripcion','profesors.telefono')
                    ->where('id_usuario',$id)
                    ->get();
        //dd($profesor);
        return view('perfil.listarProf')->with('profesor',$profesor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
      //$profesor = Profesor::FindOrFail('id_usuario',$id);
        $profesor = Profesor::where('id_usuario', $id)->get();
        return response()->json($profesor);
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
        if($request->ajax()){
                $profesor = Profesor::FindOrFail($id);
                //en input amacenamos toda la info del request
                $input = $request->all();

                $resultado = $profesor->fill($input)->save();

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
