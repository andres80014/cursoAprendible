<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
            return view('home');
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

    public function mensajes(Request $request){
        $this->validate($request,[
            'nombre' =>'required',
            'email'  =>'email|required',
            'mensaje' =>'min:5'
        ]);
        return $request->all();
    }
}
