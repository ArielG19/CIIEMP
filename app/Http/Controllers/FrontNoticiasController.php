<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Categoria;
use Jenssegers\Date\Date;

class FrontNoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $allcategorias = Categoria::all();
      $recents = Noticia::OrderBy('created_at', 'desc')
            ->take(4)->get();
        $events = Noticia::whereHas('articleEvent', function ($query) {
            $query->where('estado', "activo");
        })
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

      $noticias = Noticia::OrderBy('id', 'DESC')->paginate(4);

      return view('noticia/index',compact('noticias','recents','events'));
    }

    public function noticia($slug)
    {
        $noticias = Noticia::findBySlug($slug);

        $not = Noticia::all();

       /* $articles->paginate();*/
        $recents = Noticia::OrderBy('created_at', 'desc')
            ->take(4)->get();

        $events = Noticia::whereHas('articleEvent', function ($query) {
            $query->where('estado', "activo");
            })
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('noticia',compact('noticias','recents','events'));
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
