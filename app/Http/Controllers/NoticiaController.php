<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Noticia;
=======
use App\Concursos;
use App\Http\Requests\UploadRequest;

use Illuminate\Http\Request;
use App\Noticia;
use App\File;
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
use App\User;
use App\Categoria;
use Session;
use Redirect;
use Image;
<<<<<<< HEAD
=======
use Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
      $noticias = Noticia::orderBy('id','DESC')->paginate(5);

      return view('panel.noticia.index')->with(compact('noticias'));
=======
        $noticias = Noticia::orderBy('id', 'DESC')->paginate(5);

        return view('panel.noticia.index')->with(compact('noticias'));
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
      $categorias = Categoria::pluck('name','id');
      return view('panel.noticia.create',compact('categorias'));
=======
        $categorias = Categoria::pluck('name', 'id');
        return view('panel.noticia.create', compact('categorias'));
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
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
=======
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {
        $noticia = Noticia::create($request->all());
        $concursos = new Concursos($request->all());

        if (isset($concursos['estado']) and $concursos['estado'] == 'on') {
            $concursos->id_noticia = $noticia->id;
            $concursos->estado = "activo";
            $concursos->save();

        }
        if ($request->hasFile('image')) {

            foreach ($request->image as $image) {

                $filename = uniqid() . '.' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(1000, 600)->save(public_path('images/noticia/' . $filename));
                File::create([
                    'id_noticias' => $noticia->id,
                    'image' => $filename
                ]);


            }

        }

        Session::flash('message', 'El Articulo se ha publicado correctamente');
        return redirect::to('home/noticia');

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


      $noticia = Noticia::find($id);

      return view('panel.noticia.edit',compact('users','categorias','blog'));
=======
        $users = User::pluck('name', 'id');
        $categorias = Categoria::pluck('name', 'id');


        $noticia = Noticia::find($id);

        return view('panel.noticia.edit', compact('users', 'categorias', 'noticia'));
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
<<<<<<< HEAD
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
=======

        $noticia = Noticia::find($id);
        $noticia->fill($request->all());
        $noticia->save();
        $concursos = new Concursos($request->all());
        //validar checkbox
        if (isset($concursos['estado']) and $concursos['estado'] == 'on') {
            $concursos->id_noticia = $noticia->id;
            $concursos->estado = "activo";
            $concursos->save();

        }
        //Eliminar imagenes previas
        foreach ($noticia->articleImg as $img) {
            $file_path = public_path('images/noticia') . '/' . $img->image;
            unlink($file_path);
            $img->delete();

        }
        //guardar multiples file
        if ($request->hasFile('image')) {
            foreach ($request->image as $image) {
                $filename = uniqid() . '.' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(1000, 600)->save(public_path('images/noticia/' . $filename));
                File::create([
                    'id_noticias' => $noticia->id,
                    'image' => $filename
                ]);
            }



        }


        Session::flash('message', 'Entrada de noticias editada Correctamente');
        return redirect::to('home/noticia');
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
        $file_path = public_path('images/noticia/').'/'.$file->path;
        unlink($file_path);
        $file->delete();
      }

      Session::flash('message','Entrada de blog eliminada Correctamente');
      return redirect::to('home/blogs') ;
=======
        $not = Noticia::findOrFail($id);
        if (isset($not->articleImg[0]->image)) {
            //eliminar multiples files
            foreach ($not->articleImg as $img) {
                $file_path = public_path('images/noticia') . '/' . $img->image;
                unlink($file_path);
                $not->delete();

            }


        } else {
            $not->delete();
        }

        Session::flash('message', 'Entrada de blog eliminada Correctamente');
        return redirect::to('home/noticia');
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47

    }
}
