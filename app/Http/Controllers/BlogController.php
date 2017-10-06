<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use App\Blog;
use App\User;
use App\Categoria;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
use Session;
use Redirect;
use Image;

<<<<<<< HEAD
=======

>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

<<<<<<< HEAD
      $blogs = Blog::orderBy('id','DESC')->paginate(5);

      return view('panel.blog.index')->with(compact('blogs'));
    }



=======
        $blogs = Blog::orderBy('id', 'DESC')->paginate(5);

        return view('panel.blog.index')->with(compact('blogs'));
    }


>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
      $categorias = Categoria::pluck('name','id');
      return view('panel.blog.create',compact('categorias'));
=======
        $categorias = Categoria::pluck('name', 'id');
        return view('panel.blog.create', compact('categorias'));
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request  $request
=======
     * @param  \Illuminate\Http\Request $request
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        $blog = new Blog($request->all());
        $blog->save();
        if ($request->hasFile('path')) {
<<<<<<< HEAD
          $imagen = $request->file('path');
          $filename= time(). '.' .$imagen->getClientOriginalExtension();
          Image::make($imagen)->resize(1000, 500)->save(public_path('images/'.$filename));
          $blog->path=$filename;
          $blog->save();
        }else {
          $blog->path = null;
          $blog->save();
        }


      Session::flash('message','La entrada del blog fue creada correctamente');
      return redirect::to('home/blogs');
=======
            $imagen = $request->file('path');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(1000, 600)->save(public_path('images/' . $filename));
            $blog->path = $filename;
            $blog->save();
        } else {
            $blog->path = null;
            $blog->save();
        }


        Session::flash('message', 'La entrada del blog fue creada correctamente');
        return redirect::to('home/blogs');
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47

    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
       $users = User::pluck('name', 'id');
       $categorias =Categoria::pluck('name', 'id');


       $blog = Blog::find($id);

       return view('panel.blog.edit',compact('users','categorias','blog'));
=======
        $users = User::pluck('name', 'id');
        $categorias = Categoria::pluck('name', 'id');


        $blog = Blog::find($id);

        return view('panel.blog.edit', compact('users', 'categorias', 'blog'));
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
=======
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $blog = Blog::find($id);
<<<<<<< HEAD
        $blog->fill($request->all());
        $blog->save();
        if ($request->hasFile('path')) {
          $imagen = $request->file('path');
          $filename= time(). '.' .$imagen->getClientOriginalExtension();
          Image::make($imagen)->resize(1000, 500)->save(public_path('images/'.$filename));
          $blog->path=$filename;
          $blog->save();
        }else {
          $blog->path = null;
          $blog->save();
        }


      Session::flash('message','Entrada del blog editada Correctamente');
      return redirect::to('home/blogs');
=======
        $blog->titulo = $request->input('titulo');
        $blog->descripcion = $request->input('descripcion');
        $blog->slug = $request->input('slug');
        $blog->id_categoria = $request->input('id_categoria');
        $blog->id_usuario = $request->input('id_usuario');

        if ($request->hasFile('path')) {
            $imagen = $request->file('path');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(1000, 500)->save(public_path('images/' . $filename));
            $oldfilename = $blog->path;
            $blog->path = $filename;
            Storage::delete($oldfilename);

        }
        $blog->save();


        Session::flash('message', 'Entrada del blog editada Correctamente');
        return redirect::to('home/blogs');
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
       $file = Blog::findOrFail($id);
       if ($file->path == null) {
         $file->delete();
       }
       else {
         $file_path = public_path('images/').'/'.$file->path;
         unlink($file_path);
         $file->delete();
       }

       Session::flash('message','Entrada de blog eliminada Correctamente');
       return redirect::to('home/blogs') ;
=======
        $file = Blog::findOrFail($id);
        if (($file->path != null) and ($file->file == null)) {
            $file_path = public_path('images/') . '/' . $file->path;
            unlink($file_path);
            $file->delete();
        } else if(($file->path == null) and ($file->file != null)){
            $file_pathF = public_path('download/pdf').'/'.$file->file;
            unlink($file_pathF);
            $file->delete();
        }
        else if(($file->path != null) and ($file->file != null)){
            $file_path = public_path('images/') . '/' . $file->path;
            $file_pathF = public_path('download/pdf').'/'.$file->file;
            unlink($file_path);
            unlink($file_pathF);
            $file->delete();
        }
        else{
            $file->delete();
        }

        Session::flash('message', 'Entrada de blog eliminada Correctamente');
        return redirect::to('home/blogs');
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    }
}
