<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function listarChat($usuario_activo)
    {
     /* Select messages.id,mensaje,emisor.name as emisor,receptor.name as receptor from messages
        inner join users as emisor on messages.id_emisor = emisor.id
        inner join users as receptor on messages.id_receptor = receptor.id
        where conversation_id = 1;*/ 
        
        $message = DB::table('messages')
                ->join('users as emisor','messages.id_emisor','=','emisor.id')
                ->join('users as receptor','messages.id_receptor','=','receptor.id')
                ->select('messages.id','mensaje','emisor.name as emisor','emisor.imagen','receptor.name as receptor','messages.created_at')
                ->where('emisor.id',$usuario_activo)
                ->orderBy('messages.created_at','desc')
                ->get();
        //dd($message); 
        return view('chat.listar')->with('message',$message);
    }
                 
/*
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
        if($request->ajax()){

                $my_id = \Auth::user()->id;
                $id_receptor = $request->id_to;
                $mensaje = $request->mensaje;

                //check if conversation already started or not
                $checkCon1 = DB::table('conversations')->where('user_one',$my_id)
                ->where('user_two',$id_receptor)->get(); // if loggedin user started conversation

                $checkCon2 = DB::table('conversations')->where('user_two',$my_id)
                ->where('user_one',$id_receptor)->get(); // if loggedin recviced message first
                //array_merge para 5.4 ->
                $allCons = array_merge($checkCon1->toArray(),$checkCon2->toArray());
                if(count($allCons)!=0)
                {
                    //old conversation
                    $contId_old = $allCons[0]->id;
                    
                    //insert data into messages table
                      $message = DB::table('messages')->insert([
                        'mensaje' => $mensaje,
                        'id_emisor' => $my_id,
                        'id_receptor' => $id_receptor,
                        'conversation_id' =>  $contId_old,
                        'created_at'        => new \dateTime,
                        'updated_at'        => new \dateTime
                      ]);

                }else {
                  // new conversation
                      $conID_new = DB::table('conversations')->insertGetId([
                        'user_one' => $my_id,
                        'user_two' => $id_receptor,
                        'created_at'        => new \dateTime,
                        'updated_at'        => new \dateTime,
                      ]);

                      echo $conID_new;
                      $message = DB::table('messages')->insert([
                        'mensaje' => $mensaje,
                        'id_emisor' => $my_id,
                        'id_receptor' => $id_receptor,
                        'conversation_id' => $conID_new,
                        'created_at'        => new \dateTime,
                        'updated_at'        => new \dateTime,
                      ]);
                }

            if($message){

                //enviamos un json si es true o false
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
