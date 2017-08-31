<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
use DB;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::Orderby('name','ASC')->pluck('name','id');
        return view('chat.chat')->with('users',$users);
    }

    public function listarChat()
    {
        //SELECT tabla.name as emisor,users.name as receptor,mensaje
        //FROM chats inner join users as tabla on chats.id_emisor = tabla.id inner join users on chats.id_receptor = users.id;
        $chats = DB::table('chats')
                   ->join('users','chats.id_emisor','=','users.id')
                   ->join('users as receptor','chats.id_receptor','=','receptor.id')
                   ->select('users.name as emisor','users.imagen','receptor.name as receptor','receptor.imagen as imagen2','mensaje','chats.created_at',DB::raw('count(mensaje)'))
                   ->groupBY('mensaje')->orderBy('id_emisor','id_receptor')->orderBy('mensaje','desc')->get();

        //dd($chats);
        return view('chat.listar')->with('chats',$chats);
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
        //dd($request);
        if($request->ajax()){

            $chats = new Chat();
            $chats->mensaje = $request->mensaje;
            $chats->id_emisor = \Auth::user()->id;
            $chats->id_receptor = $request->id_to;
            $chats->save();
           
            
            //si no hay error entonces
            if($chats){

                //Session::flash('save','Se ha creado correctamente');
                return response()->json(['success'=>'true']);
            }else{
                return response()->json(['success'=>'false']);
            }
        }

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
