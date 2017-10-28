<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
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
        //return view('chat.material')->with('users',$users);
    }

    public function listarChat($usuario_activo)
    {
          $allUsers1 = DB::table('users')
          ->Join('conversations','users.id','conversations.user_one')
          ->where('conversations.user_two', $usuario_activo)->get();
          //dd($allUsers1);


          $allUsers2 = DB::table('users')
          ->Join('conversations','users.id','conversations.user_two')
          ->where('conversations.user_one', $usuario_activo)->get();

          $conversacion = array_merge($allUsers1->toArray(), $allUsers2->toArray());
          //dd($conversacion);
          $array = array_pluck($conversacion,'id');
          //dd($array);
            $message = DB::table('messages')
            ->join('users', 'users.id','messages.id_emisor')
            ->join('users as receptor', 'receptor.id','messages.id_receptor')
            ->select('users.name as emisor','users.imagen as emisorImg','receptor.name as receptor','receptor.imagen as receptorImg',DB::raw('count(mensaje) as mensajes'),'messages.conversation_id')
            ->Orderby('conversation_id','desc')
            ->groupBy('conversation_id')
            ->whereIn('messages.conversation_id', $array)->get();
            //dd($message);
            return view('chat.prueba')->with('message',$message);
        
    }

    public function listarConversacion($id)
    {
        $messages = DB::table('messages')
        ->join('users', 'users.id','messages.id_emisor')
        ->select('messages.mensaje','users.imagen as emisorImg','messages.created_at')
        ->Orderby('messages.created_at','desc')
        ->Where('messages.conversation_id',$id)
        ->get();
        //dd($messages);
        return view('chat.listarchat')->with('messages',$messages);
        
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
