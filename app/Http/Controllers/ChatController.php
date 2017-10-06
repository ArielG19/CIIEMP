<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\User;
use Auth;
=======
use App\Chat;
use App\User;
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
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
<<<<<<< HEAD
     /* Select messages.id,mensaje,emisor.name as emisor,receptor.name as receptor from messages
        inner join users as emisor on messages.id_emisor = emisor.id
        inner join users as receptor on messages.id_receptor = receptor.id
        where conversation_id = 1;*/ 

        /*$message = DB::table('messages')
                ->join('users as emisor','messages.id_emisor','=','emisor.id')
                ->join('users as receptor','messages.id_receptor','=','receptor.id')
                ->select('messages.id','mensaje','emisor.name as emisor','emisor.imagen','receptor.name as receptor','messages.created_at')
                ->where('emisor.id',$usuario_activo)
                ->orderBy('messages.created_at','desc')
                ->get();
        dd($message); */

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
          foreach ($array as $a) {
            $message = DB::table('messages')
            ->join('users', 'users.id','messages.id_emisor')
            ->where('messages.conversation_id', $a)->get();

            
            echo $message;
          }
          return view('chat.prueba',compact('message'));
          //return view('chat.prueba')->with('message',$message);
                   //dd($array);

                    
         
          

          //dd($longitud);
          $message = DB::table('messages')
          ->join('users', 'users.id','messages.id_emisor')
          ->where('messages.conversation_id', $array)->get();
          //->where('messages.conversation_id', $conversacion[1]->id)->get();
          //return $message;

         //return view('chat.prueba')->with('message',$message);
    }
                 
/*
=======
        /*SELECT chats.id,tabla.name as emisor,users.name as receptor,mensaje
        FROM chats inner join users as tabla on chats.id_emisor = tabla.id inner join users on chats.id_receptor = users.id where tabla.id= 1 and users.id=2;*/

        $query = DB::table('chats')
                   ->join('users','chats.id_emisor','=','users.id')
                   ->join('users as receptor','chats.id_receptor','=','receptor.id')
                   ->select('users.name as emisor','users.imagen','receptor.name as receptor','receptor.imagen as imagen2','mensaje','chats.created_at')
                   ->where('receptor.id',$usuario_activo);

        $query2 = DB::table('chats')
                   ->join('users','chats.id_emisor','=','users.id')
                   ->join('users as receptor','chats.id_receptor','=','receptor.id')
                   ->select('users.name as emisor','users.imagen','receptor.name as receptor','receptor.imagen as imagen2','mensaje','chats.created_at')
                   ->where('users.id',$usuario_activo)
                   ->union($query)
                   ->orderBy('created_at','desc')
                   //->limit('1')
                   ->get();
        //dd($query2);
        return view('chat.listar')->with('query2',$query2);
    }

    /*
*
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
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
<<<<<<< HEAD
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
            
=======
        //dd($request);
        if($request->ajax()){

            $chats = new Chat();
            $chats->mensaje = $request->mensaje;
            $chats->id_emisor = \Auth::user()->id;
            $chats->id_receptor = $request->id_to;
            $chats->save();
            $message->tags()->sync($request->tag);
           
            
            //si no hay error entonces
            if($chats){

                //Session::flash('save','Se ha creado correctamente');
                return response()->json(['success'=>'true']);
            }else{
                return response()->json(['success'=>'false']);
            }
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
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
