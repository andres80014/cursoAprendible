<?php

namespace App\Http\Controllers;
use \App\Http\Requests\CreateMessageRequest;
use http\Env\Response;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('example',['only' => ['home']] );
    }

    public function home(){
            return view('home');
        //return response('costenido e la respuesta',200);
    }


    public function contacto(){
        return view ('contactos');
    }

    public function saludo($nombre = 'invitado'){
        $consolas = [
            'play Station 4 ',
            'Xbox',
            'Wii'
        ];
        $html = "<h2> contenido HTML</h2>";
        return view('saludo',compact('html','consolas','nombre'));
    }

    public function mensajes(CreateMessageRequest $request){

        $data =  $request->all();
        //return \response()->json(['data' => $data],200 );
        return redirect('contacto')->with('info','Tu mensaje a sido envidado');
    }
}
