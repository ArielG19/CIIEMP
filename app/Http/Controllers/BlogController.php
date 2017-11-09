<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use App\Blog;
use App\User;
use App\Categoria;
use Illuminate\Support\Facades\Storage;
use Session;
use Redirect;
use Image;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if ( Auth::user()->type == 'admin') {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(5);
      }
      else {
        $blogs = Blog::orderBy('id', 'DESC')->where('id_usuario', Auth::user()->id)->paginate(5);
      }



        return view('panel.blog.index')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('name', 'id');
        return view('panel.blog.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *

     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog($request->all());
        $blog->save();
        if ($request->hasFile('path')) {
            $imagen = $request->file('path');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(1000, 600)->save(public_path('images/' . $filename));
            $blog->path = $filename;
            $blog->save();
        } else {
            $blog->save();
        }


        Session::flash('message', 'La entrada del blog fue creada correctamente');
        return redirect::to('home/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::pluck('name', 'id');
        $categorias = Categoria::pluck('name', 'id');

        $blog = Blog::find($id);
        return view('panel.blog.edit', compact('users', 'categorias', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *

     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->fill($request->all());
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
    }

    /**
     * Remove the specified resource from storage.
     *

     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Blog::findOrFail($id);
        if (($file->path != null) and ($file->file == null)) {
            $file_path = public_path('images/') . '/' . $file->path;
            unlink($file_path);
            $file->delete();
        } elseif (($file->path == null) and ($file->file != null)) {
            $file_pathF = public_path('download/pdf').'/'.$file->file;
            unlink($file_pathF);
            $file->delete();
        } elseif (($file->path != null) and ($file->file != null)) {
            $file_path = public_path('images/') . '/' . $file->path;
            $file_pathF = public_path('download/pdf').'/'.$file->file;
            unlink($file_path);
            unlink($file_pathF);
            $file->delete();
        } else {
            $file->delete();
        }

        Session::flash('message', 'Entrada de blog eliminada Correctamente');
        return redirect::to('home/blogs');
    }
}
