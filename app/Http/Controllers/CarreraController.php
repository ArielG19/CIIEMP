<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Career;
=======
use App\Carrera;
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
use Session;
use Redirect;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
      $carreras = Career::orderBy('id','DESC')->paginate(5);
=======
      $carreras = Carrera::orderBy('id','DESC')->paginate(5);
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
      return view('panel.carrera.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.carrera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
      $carreras = new Career($request->all());

      $carreras->save();
=======
      $carreras = new Carrera($request->all());
      $carreras->save();


>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
      Session::flash('message','La carrera fue creada correctamente');
      return redirect::to('home/carrera');
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
<<<<<<< HEAD
    $carrera= Career::find($id);
=======
    $carrera= Carrera::find($id);
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
     return view('panel.carrera.edit',compact('carrera'));
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
<<<<<<< HEAD
      $carrera= Career::find($id);
=======
      $carrera= Carrera::find($id);
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
      $carrera->fill($request->all());
      $carrera->save();

      Session::flash('message','La carrera fue actualizada correctamente');
     return redirect::to('home/carrera');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
      $carrera= Career::find($id);
=======
      $carrera= Carrera::find($id);
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
      $carrera->delete();

      Session::flash('message','Categoria eliminada correctamente');
      return redirect::to('home/carrera');
    }
}
