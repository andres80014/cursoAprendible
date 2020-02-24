<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('contacto',['as' => 'contacto', 'uses' => 'PagesController@contacto']);
Route::post('contacto','PagesController@mensajes');

Route::get('saludos/{nombre?}',['as'=>'saludos','uses'=>'PagesController@saludo']);


/*


Route::get('saludos/{nombre?}',['as'=>'saludo',function ($nombre='invitado'){
    return view('saludo',compact('nombre'));
}]) ;


Route::get('contactame', ['as'=>'contacto',function(){
    return view('contactos');
}]);
/*
Route::get('/', function () {
    echo "<a href=".route('contactos').">Contactos</a><br>";
    echo "<a href='contacto'>Contactos</a><br>";
    echo "<a href='contactos'>Contactos</a><br>";
    echo "<a href='contactos'>Contactos</a><br>";

});



Route::get('contacto', ['as'=>'contactos',function(){
    return "horñla dese cotacto ";
}]);


Route::get('saludos/{nombre?}',function ($nombre='invitado'){
    return "hola saludo desde ".$nombre;
}) ->where('nombre',"[A-Za-z]+") ;


Route::get('contactos', function(){
    return "hola dese cotactos";
});
*/
