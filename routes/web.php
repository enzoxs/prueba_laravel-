<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', function() {
    return '<h1>Hola mundo</h1>';
});

Route::get('usuarios/{nombre}/{id}', function($nombre , $id  ) {
    return 'Este es el usuario '. $nombre. ' su id es '. $id;
});



Route::get('cursos', function(){

    $nombre ='Etzio';
    $datos= array(
        'curso1' => 'JavaScript',
        'curso2' => 'Java',
        'curso3' => 'PHP'

    );

    return view('tutoriales.cursos')->with('datos', $datos);

});


Route::get('cliente', function () {
    $cliente = App\Cliente::find(2);
    echo $cliente->nombre;
});


Route::get('cliente/{id}', function ($id) {
    $cliente = App\Cliente::find($id);
    echo $cliente->nombre;
});

Route::get('cliente_nombre', function () {
    $cliente = App\Cliente::where('nombre','=','Mario')->first();
    echo $cliente->id;
});