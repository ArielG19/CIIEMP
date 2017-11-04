<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use App\Student;
use App\Career;

use Auth;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('usuario.index');
    }

    public function listarUsuario()
    {
        $users = User::Orderby('name','desc')->paginate(7);
        return view('usuario.listar')->with('users',$users);
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
        if($request->ajax())
        {
                    //dd($request->type);
                    $usuarios = new User();
                    $usuarios->name = $request->name;
                    $usuarios->email = $request->email;
                    $usuarios->type = $request->type;
                    $usuarios->password=bcrypt($request->password);
                    $usuarios->save();

                if($request->type == 'profesor')
                {
                    $profesor = new Teacher();
                    $profesor->id_usuario = $usuarios->id;
                    $profesor->save();

                   
                }
                elseif($request->type == 'estudiante')
                {
                    $estudiante = new Student();
                    $estudiante->id_usuario = $usuarios->id;
                    $estudiante->save();
                }
                
                //si no hay error entonces
                if($usuarios){
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
        $usuarios = User::FindOrFail($id);
        return response()->json($usuarios);


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

                $usuarios =User::FindOrFail($id);
                //en input amacenamos toda la info del request
                $input = $request->all();
                $resultado = $usuarios->fill($input)->save();

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
                $usuarios = User::FindOrFail($id);
                
                $resultado = $usuarios->delete();

                if($resultado)
                {
                    return response()->json(['success'=>'true']);
                }else
                {
                    return response()->json(['success'=>'false']);
                }
    }
}
