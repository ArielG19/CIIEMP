<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $users = User::all();
        return view('usuario.listar')->with('users',$users);
    }

    //--------METODOS PARA EL PERFIL------------------------------------------------
    public function miPerfil()
    {
        return view('perfil.perfil',array('user' => Auth::user() ));
    }

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
        //return view('isnaya.usuarios.listar')->with('usuarios',$usuarios);
        return view('perfil.perfil', array('user'=> Auth::user() ));
    }
    //--------METODOS PARA EL PERFIL------------------------------------------------

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
            $usuarios = User::create($request->all());
            $usuarios->password=bcrypt($request->password);
            $usuarios->save();
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
    }
}
