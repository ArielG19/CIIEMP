<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
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
        $profesor = DB::table('teachers')
                    ->select('teachers.primer_nombre','teachers.segundo_nombre','teachers.primer_apellido','teachers.segundo_apellido','teachers.telefono','teachers.profesion1','teachers.profesion2','teachers.profesion3','teachers.profesion4')
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
        $profesor = Teacher::where('id_usuario', $id)->get();
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

                $profesor = Teacher::FindOrFail($id);
                $profesor->primer_nombre = $request->primer_nombre;
                $profesor->segundo_nombre = $request->segundo_nombre;
                $profesor->primer_apellido = $request->primer_apellido;
                $profesor->segundo_apellido = $request->segundo_apellido;
                $profesor->telefono = $request->telefono;
                $profesor->profesion1 = $request->profesion1;
                $profesor->profesion2 = $request->profesion2;
                $profesor->profesion3 = $request->profesion3;
                $profesor->profesion4 = $request->profesion4;
                $profesor->save();
                //en input amacenamos toda la info del request
                //$input = $request->all();
                
                //$resultado = $profesor->fill($input)->save();
                $resultado = $profesor;

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
