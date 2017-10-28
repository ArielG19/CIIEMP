<?php

namespace App\Http\Controllers;
use App\Concursos;
use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;
use App\Noticia;
use App\File;
use App\User;
use App\Categoria;
use Session;
use Redirect;
use Image;
use Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $noticias = Noticia::orderBy('id', 'DESC')->paginate(5);
        return view('panel.noticia.index')->with('noticias',$noticias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categorias = Categoria::pluck('name', 'id');
        return view('panel.noticia.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *

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

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = User::pluck('name', 'id');
        $categorias = Categoria::pluck('name', 'id');
        $noticia = Noticia::find($id);


        return view('panel.noticia.edit', compact('users', 'categorias', 'noticia','concursos'));

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
//        $noticia = DB::table('noticias')
//
//            ->join('concursos','noticias.id','concursos.id_noticia')
//            ->where('noticias.id',$id)
//            ->get();

        $noticia = Noticia::create($request->all());
        $concursos = new Concursos($request->all());

        if (isset($concursos['estado']) and $concursos['estado'] == 'on') {
            $concursos->id_noticia = $noticia->id;
            $concursos->estado = "activo";
            $concursos->save();

        }

        //validar checkbox
        if (isset($noticia['estado']) and $noticia['estado'] == 'on') {
            $noticia->id_noticia = $noticia->id;
            $noticia->estado = "activo";
            $noticia->save();

        }
        //Eliminar imagenes previas
        if ($request->hasFile('image')) {
            foreach ($noticia->articleImg as $img) {
                $file_path = public_path('images/noticia') . '/' . $img->image;
                unlink($file_path);
                $img->delete();

            }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

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

    }
}
