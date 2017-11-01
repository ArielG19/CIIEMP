<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curriculon;
use DB;

class CurriculonController extends Controller
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
        //dd($users);
        return view('curriculon.index')->with('users',$users);

    }

    public function listarCurriculon()
    {
        $curriculon = DB::table('users')
        ->Join('curriculons','users.id','curriculons.id_usuario')
        ->Join('teachers','users.id','teachers.id_usuario')
        ->select('users.name','teachers.primer_nombre','teachers.primer_apellido','curriculons.nacionalidad','curriculons.id')
        ->Orderby('curriculons.id','desc')
        ->paginate(7);
        
        return view('curriculon.listar')->with('curriculon',$curriculon);
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
                    //dd($request->type);
                    $curriculon = new Curriculon();
                    $curriculon->resumen = $request->resumen;
                    $curriculon->titulos_academicos = $request->titulos;
                    $curriculon->estudios_doctorales = $request->estudios;
                    $curriculon->experiencia_laboral = $request->experiencia_lab;
                    $curriculon->nacionalidad = $request->nac;
                    $curriculon->estado_civil = $request->estado;
                    $curriculon->direccion = $request->dir;
                    $curriculon->id_usuario = $request->id;

                    $curriculon->save();
                
                //si no hay error entonces
                if($curriculon){
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
        $curriculons = Curriculon::FindOrFail($id);
        return response()->json($curriculons);

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
                $curriculons = Curriculon::FindOrFail($id);
                $input = $request->all();
                $resultado = $curriculons->fill($input)->save();

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
                $curriculum = Curriculon::FindOrFail($id);
                
                $resultado = $curriculum->delete();

                if($resultado)
                {
                    return response()->json(['success'=>'true']);
                }else
                {
                    return response()->json(['success'=>'false']);
                }
    }
}
