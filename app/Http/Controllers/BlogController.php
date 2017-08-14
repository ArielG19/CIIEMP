<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use App\User;
use App\Categoria;
use Session;
use Redirect;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blogs =Blog::orderBy('id','DESC')->paginate(5);
      return view('panel.blog.index', compact('blogs'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categorias = Categoria::pluck('name','id');
      return view('panel.blog.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $blog = new Blog($request->all());


      $blog->save();
      Session::flash('message','La entrada del blog fue creada correctamente');
      return redirect::to('blogs');

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
       $users = User::pluck('name', 'id');
       $categorias =Categoria::pluck('name', 'id');


       $blog = Blog::find($id);

       return view('panel.blog.edit',compact('users','categorias','blog'));
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
      $blog = Blog::find($id);
      $blog->  fill($request->all());
      $blog->save();



      $blog->save();
      Session::flash('message','Entrada del blog editada Correctamente');
      return redirect::to('blogs') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Blog::destroy($id);
       Session::flash('message','Entrada de blog eliminada Correctamente');
       return redirect::to('blogs') ;
    }
}
