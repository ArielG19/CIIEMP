<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Biblioteca;
use App\Proyecto;
use App\Categoria;
use App\User;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use Redirect;
use DB;
use Image;
use App\File;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function frontProyecto(Request $request)
    {
        $proyectos = Proyecto::Search($request->titulo)->orderBy('id', 'DESC')->paginate(5);
        return view('proyectos.indexPrincipal', compact('proyectos'));
    }

    public function filtraTipo($tipo)
    {
        $proyectos = Proyecto::Searchtipo($tipo)->first();
        $filtrar = $proyectos->paginate(5);
        return view('proyectos.indexPrincipal', compact('proyectos'));

    }

    public function index()
    {

        $proyect = Proyecto::orderBy('id', 'DESC')->paginate(5);

        $proyect->each(function ($proyect) {

            $proyect->profesor;

        });

        return view('proyectos.index', compact('proyect'));


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function egresados()
    {
        $categorias = Categoria::pluck('name', 'id');

        $profesor = Teacher::selectRaw('id, CONCAT(primer_nombre," ",segundo_nombre," ",primer_apellido," ",segundo_apellido) as full_name')->where('primer_nombre', '!=', 'Editar', 'or', 'primer_apellido', '!=', 'Editar')->pluck('full_name', 'id');

        return view('proyectos.createEgresado', compact('categorias', 'profesor'));
    }

    public function create()
    {
        $categorias = Categoria::pluck('name', 'id');

        $profesor = Teacher::selectRaw('id, CONCAT(primer_nombre," ",segundo_nombre," ",primer_apellido," ",segundo_apellido) as full_name')->where('primer_nombre', '!=', 'Editar', 'or', 'primer_apellido', '!=', 'Editar')->pluck('full_name', 'id');

        return view('proyectos.create', compact('categorias', 'profesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function storeEgresado(Request $request)
    {

        $proyect = new Proyecto($request->all());
        $proyect->tipo = 'egresado';
        $proyect->tel = $request->tel;


        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(1000, 500)->save(public_path('images/proyecto/' . $filename));
            $proyect->imagen = $filename;
            $proyect->save();
        } else {

            $proyect->save();
        }

        if ($request->hasFile('image')) {
            foreach ($request->image as $image) {
                $filename = uniqid() . '.' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(1000, 600)->save(public_path('images/proyecto/' . $filename));
                File::create([

                    'id_proyectos' => $proyect->id,
                    'image' => $filename
                ]);
            }
        }

        Session::flash('message', 'Proyecto publicado correctamente');
        return redirect::to('home/proyectos');


    }

    public function store(Request $request)
    {
        //

        $proyect = new Proyecto($request->all());
        $proyect->tipo = 'estudiante';

        if ($request->input('responsable') == null) {

            $proyect->teacher_id = $request->id_profesor;
        } else {

            $proyect->responsable = $request->responsable;
            $proyect->tel = $request->tel;
        }

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(1000, 500)->save(public_path('images/proyecto/' . $filename));
            $proyect->imagen = $filename;
            $proyect->historia = null;
            $proyect->save();
        } else {

            $proyect->historia = null;
            $proyect->save();
        }

        if ($request->hasFile('image')) {
            foreach ($request->image as $image) {
                $filename = uniqid() . '.' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(1000, 600)->save(public_path('images/proyecto/' . $filename));
                File::create([

                    'id_proyectos' => $proyect->id,
                    'image' => $filename
                ]);
            }
        }


        Session::flash('message', 'Proyecto publicado correctamente');
        return redirect::to('home/proyectos');

        //return redirect::to('bibliotecas');
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
        $proyecto = Proyecto::find($id);
        $teacher = Teacher::find($proyecto->teacher_id);

        return view("proyectos.detalleProyecto", compact('proyecto', 'teacher'));
    }

    public function showimg($id)
    {
        $proyect = Proyecto::find($id);


        return view("proyectos.modalimg", compact('proyect'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorias = Categoria::pluck('name', 'id');

        $profesor = Teacher::selectRaw('id, CONCAT(primer_nombre," ",segundo_nombre," ",primer_apellido," ",segundo_apellido) as full_name')->where('primer_nombre', '!=', '', 'or', 'primer_apellido', '!=', '', 'or', 'primer_apellido', '!=', '')->pluck('full_name', 'id');


        $proyect = Proyecto::find($id);

        return view('proyectos.edit', compact('categorias', 'profesor', 'proyect'));
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

        $proyect = proyecto::find($id);
        $proyect->fill($request->all());
        if ($proyect->tipo == 'estudiante') {
            $proyect->tipo = 'estudiante';
        } else {
            $proyect->tipo = 'egresado';
        }


        if ($request->input('responsable') == null) {

            $proyect->teacher_id = $request->id_profesor;
        } else {

            $proyect->responsable = $request->responsable;
            $proyect->tel = $request->tel;
        }

        if ($request->has('responsable')) {
           $proyect->teacher_id = null;
        }

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(1000, 500)->save(public_path('images/proyecto/' . $filename));
            $oldfilename = $proyect->imagen;
            $proyect->imagen = $filename;
            Storage::delete($oldfilename);

        }
        //Eliminar imagenes previas
        if ($request->hasFile('image')) {
            foreach ($proyect->proyectoImg as $img) {
                $file_path = public_path('images/proyecto') . '/' . $img->image;
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
                    'id_proyectos' => $proyect->id,
                    'image' => $filename
                ]);
            }


        }
        $proyect->save();

        Session::flash('message', 'Proyecto modificado correctamente');
        return redirect::to('home/proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $proyect = Proyecto::findOrFail($id);

        if ((isset($proyect->proyectoImg[0])) and ($proyect->imagen == null)) {
            //eliminar multiples files
            foreach ($proyect->proyectoImg as $img) {
                $file_path = public_path('images/proyecto') . '/' . $img->image;
                unlink($file_path);
                $proyect->delete();

            }
        } else if ((empty($proyect->proyectoImg[0])) and ($proyect->imagen != null)) {
            $file_path = public_path('images/proyecto') . '/' . $proyect->imagen;
            unlink($file_path);
            $proyect->delete();

        } else if ((isset($proyect->proyectoImg[0])) and ($proyect->imagen != null)) {
            foreach ($proyect->proyectoImg as $img) {
                $file_path = public_path('images/proyecto') . '/' . $img->image;
                unlink($file_path);


            }
            $file_path = public_path('images/proyecto') . '/' . $proyect->imagen;
            unlink($file_path);
            $proyect->delete();
        } else {
            $proyect->delete();
        }
//
        Session::flash('message', 'Proyecto eliminado Correctamente');
        return redirect::to('home/proyectos');
    }
}
