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

Route::get('/', function () {
    return view('menu');
});

Route::get('usuarios', function () {
    return ('usuarios');
});

Route::get('footer', function () {
    return view('footer');
});

Route::get('header', function () {
    return view('header');
});

Route::get('login', function () {
    return view('login');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('libros', function () {
    $libros = App\Libro::all();
    $autores = App\Autor::all();
    
    return  view('libros', compact('libros','autores'));
});

Route::post('insert', function(Request $request){
    $nuevoLibro = new App\Libro;

    $nuevoLibro->nombre = $request->nombre;
    $nuevoLibro->idIsbn = $request->idIsbn;
    $nuevoLibro->anio = $request->anio;
    $nuevoLibro->idAutor = $request->idAutor;
    $nuevoLibro->estado = 1;

    $nuevoLibro->save();

    return back()->with('Mensaje', 'Libro Agregado');


});

Route::get('usuarios', function () {
    $usuarios = App\Usuario::all();
    
    return  view('usuarios', compact('usuarios'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
