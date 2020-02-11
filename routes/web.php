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

Route::get('libros', 'LibroController@libros');

Route::post('insert', 'LibroController@nuevoLibro');

Route::get('usuarios', function () {
    $usuarios = App\Usuario::all();
    
    return  view('usuarios', compact('usuarios'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
