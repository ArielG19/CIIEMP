<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\User;
use App\Categoria;
use Session;
use Redirect;
use Image;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $noticias = Noticia::orderBy('id','DESC')->paginate(5);

      return view('panel.noticia.index')->with(compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categorias = Categoria::pluck('name','id');
      return view('panel.noticia.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $noticia = new Noticia($request->all());
      $noticia->save();

      //imagen1
      if ($request->hasFile('image1')) {
        $imagen1 = $request->file('image1');
        $filename1= time(). '.' .$imagen1->getClientOriginalExtension();
        Image::make($imagen1)->resize(1000, 500)->save(public_path('images/noticia/'.$filename1));
        $noticia->image1=$filename1;
        $noticia->save();
      }else {
        $noticia->image1 = null;
        $noticia->save();
      }


      //imagen2

      if ($request->hasFile('image2')) {
        $imagen2 = $request->file('image2');
        $filename2= time(). '.' .$imagen2->getClientOriginalExtension();
        Image::make($imagen2)->resize(1000, 500)->save(public_path('images/noticia/'.$filename2));
        $noticia->image2=$filename2;
        $noticia->save();
      }else {
        $noticia->image2 = null;
        $noticia->save();
      }


      //imagen3
      if ($request->hasFile('image3')) {
        $imagen3 = $request->file('image3');
        $filename3= time(). '.' .$imagen3->getClientOriginalExtension();
        Image::make($imagen3)->resize(1000, 500)->save(public_path('images/noticia/'.$filename3));
        $noticia->image3=$filename3;
        $noticia->save();
      }else {
        $noticia->image3 = null;
        $noticia->save();
      }


    Session::flash('message','La entrada del blog fue creada correctamente');
    return redirect::to('home/noticia');
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


      $noticia = Noticia::find($id);

      return view('panel.noticia.edit',compact('users','categorias','blog'));

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
      $noticia = Blog::find($id);
      $noticia->fill($request->all());
      $noticia->save();
      if ($request->hasFile('file')) {
        $imagen = $request->file('file');
        $filename= time(). '.' .$imagen->getClientOriginalExtension();
        Image::make($imagen)->resize(1000, 500)->save(public_path('images/noticia/'.$filename));
        $noticia->file=$filename;
        $noticia->save();
      }else {
        $noticia->file = null;
        $noticia->save();
      }


    Session::flash('message','Entrada del blog editada Correctamente');
    return redirect::to('home/noticia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $file = Blog::findOrFail($id);
      if ($file->path == null) {
        $file->delete();
      }
      else {
        $file_path = public_path('images/noticia/').'/'.$file->path;
        unlink($file_path);
        $file->delete();
      }

      Session::flash('message','Entrada de blog eliminada Correctamente');
      return redirect::to('home/blogs') ;

    }
}
