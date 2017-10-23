<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Teacher;
use App\Blog;
use App\Categoria;
use Jenssegers\Date\Date;

class DocentesInnovadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            
        $user = DB::table('users')
        ->Join('teachers','users.id','teachers.id_usuario')
        ->get();
        //dd($user);
        return view('docentes.index')->with('user',$user);

    }

    public function listarBlog($id)
    {
        $allcategorias = Categoria::all();
        $blogs = Blog::where('id_usuario',$id)->OrderBy('id', 'DESC')->paginate(4);
       // dd($blogs);
      return view('blog/index',compact('blogs','allcategorias'));


    }

    public function Curriculon($id)
    {  
        $curriculon = DB::table('users')
        ->Join('curriculons','users.id','curriculons.id_usuario')
        ->Join('teachers','users.id','teachers.id_usuario')
        ->select('users.email','users.imagen','curriculons.resumen','curriculons.titulos_academicos','curriculons.estudios_doctorales','curriculons.experiencia_laboral','curriculons.nacionalidad','curriculons.estado_civil','curriculons.direccion','teachers.primer_nombre','teachers.segundo_nombre','teachers.primer_apellido','teachers.segundo_apellido','teachers.telefono','teachers.profesion1','teachers.profesion2','teachers.profesion3','teachers.profesion4')
        ->where('curriculons.id_usuario',$id)->get();
        //dd($curriculon); 
        return view('curriculon.ListarCurriculon')->with('curriculon',$curriculon);
    }

    public function listarPublicaciones($id)
    {
        $publicaciones = DB::table('users')
        ->Join('publicaciones','users.id','publicaciones.id_autor')
        ->Join('teachers','users.id','teachers.id_usuario')
        ->select('users.imagen','teachers.primer_nombre','teachers.primer_apellido','publicaciones.publicado_en','publicaciones.fecha','publicaciones.link')
        ->where('publicaciones.id_autor',$id)->get();
        //dd($publicaciones);
        return view('publicaciones.listarPublicaciones')->with('publicaciones',$publicaciones);
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
        $user = DB::table('users')
        ->Join('teachers','users.id','teachers.id_usuario')
        ->Where('teachers.id_usuario',$id)
        ->get();

        /*$blog = DB::table('users')
        ->Join('blogs','users.id','blogs.id_usuario')
        ->Where('blogs.id_usuario',$id)
        ->get();
        //dd($user);*/

        //$array = array_merge($user->toArray(), $blog->toArray());

        //$user = User::FindOrFail($id);
        return response()->json($user);
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
