<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Career;
use Auth;
use Image;
use DB;
class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $carrera = Career::Orderby('carrera','ASC')->pluck('carrera','id');
      return view('perfil.index',array('user' => Auth::user() ))->with('carrera',$carrera);
        
    }

     //--------METODOS PARA EL PERFIL------------------------------------------------
    public function upPerfil(Request $request)
    {
        if($request->hasFile('imagen'))
        {
            $imagen= $request->file('imagen');
            $filename= time(). '.'. $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(300,300)->save(public_path('perfil/'.$filename));

            $user=Auth::user();
            $user->imagen =$filename;
            $user->save();
        }
        $carrera = Career::Orderby('carrera','ASC')->pluck('carrera','id');
        return view('perfil.index', array('user'=> Auth::user() ))->with('carrera',$carrera);
    }
    //--------METODOS PARA EL PERFIL------------------------------------------------

    public function listarDatos($id)
    {
         $users = DB::table('users')
                ->join('students','students.id_usuario','=','users.id')
                ->join('careers','careers.id','=','students.careers_id')
                ->select('name','imagen','email','type','students.carnet','students.primer_nombre','students.segundo_nombre','students.primer_apellido','students.segundo_apellido','students.telefono','careers.carrera')
                ->where('users.id',$id)
                ->get();
        /*$datos = DB::table('students')
                ->join('careers','careers.id','=','students.careers_id')
                ->select('students.carnet','students.primer_nombre','students.segundo_nombre','students.primer_apellido','students.segundo_apellido','students.telefono','careers.carrera')
                ->get();
        dd($datos);*/

                
        return view('perfil.listarEst')->with('users',$users);
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
    
            $estudiante = new Student();
            $estudiante->carnet = $request->carnet;
            $estudiante->primer_nombre = $request->name1;
            $estudiante->segundo_nombre = $request->name2;
            $estudiante->primer_apellido = $request->apellido1;
            $estudiante->segundo_apellido = $request->apellido2;
            $estudiante->telefono = $request->telefono;
            $estudiante->careers_id = $request->carrera;
            $estudiante->id_usuario = \Auth::user()->id;
            $estudiante->save();
    
            
            //si no hay error entonces
            if($estudiante){

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
        $students = Student::FindOrFail($id);
        return response()->json($students);
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
                $students = Student::FindOrFail($id);
                //en input amacenamos toda la info del request
                $input = $request->all();
                $resultado = $students->fill($input)->save();

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
