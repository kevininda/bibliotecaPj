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

Route::get('libros', 'LibroController@index');

Route::post('insert', 'LibroController@create')->name('libro.crear');

Route::post('actualizarLibro', 'LibroController@actualizarLibro')->name('libro.actualizarLibro');

Route::delete('eliminarLibro/{id}', 'LibroController@destroy')->name('libro.eliminarLibro');

Route::get('autores', 'AutorController@index');

Route::post('actualizarAutor', 'AutorController@edit')->name('libro.actualizarAutor');

Route::delete('eliminarAutor/{id}', 'AutorController@destroy')->name('autor.eliminarAutor');



Route::get('usuarios', function () {
    $usuarios = App\Usuario::all();
    
    return  view('usuarios', compact('usuarios'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
