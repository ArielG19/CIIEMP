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
use Auth;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$noticias = Noticia::orderBy('id', 'DESC')->paginate(5)

        if(Auth::user()->type == 'admin')
        {
            $noticias = Noticia::orderBy('id', 'DESC')->paginate(5);


        }else

        {
            $noticias = Noticia::orderBy('id', 'DESC')->where('id_usuario',Auth::user()->id)->paginate(5);
        }
        return view('panel.noticia.index')->with(compact('noticias'));


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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return view('panel.noticia.modalimg', compact('noticia'));




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
    public function update(UploadRequest $request, $id)
    {

        $noticia = Noticia::find($id);
        $noticia->fill($request->all())->save();
        $concurso = Concursos::where('id_noticia',$noticia->id)->first();
        $concurso = new Concursos($request->all());


        if (isset($concurso['estado']) and $concurso['estado'] == 'on') {

            $concurso->id_noticia = $noticia->id;
            $concurso->estado = "activo";
            $noticia->articleEvent()->save($concurso);

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


        Session::flash('message', 'Entrada de noticias editada correctamente');
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
        if ((isset($not->articleImg[0])) and ($not->articleEvent == null)) {
            //eliminar multiples files
            foreach ($not->articleImg as $img) {
                $file_path = public_path('images/noticia') . '/' . $img->image;
                unlink($file_path);
                $not->delete();

            }
        } else if ((empty($not->articleImg[0])) and ($not->articleEvent != null)) {
            $not->articleEvent->delete();
            $not->delete();

        } else if ((isset($not->articleImg[0])) and ($not->articleEvent != null)) {
            foreach ($not->articleImg as $img) {
                $file_path = public_path('images/noticia') . '/' . $img->image;
                unlink($file_path);

            }
            $not->articleEvent->delete();
            $not->delete();
        } else {
            $not->delete();
        }

        Session::flash('message', 'Entrada de noticia eliminada correctamente');
        return redirect::to('home/noticia');

    }
}
