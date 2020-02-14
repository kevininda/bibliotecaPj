<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Autor;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function libros(){
        //$libros = App\Libro::all();

        $libros = Libro::orderBy('anio', 'DESC')->paginate(10);

        $autores = Autor::orderBy('nombre', 'DESC')->paginate(10);
        
        return  view('libros', compact('libros','autores'));
    }

    public function nuevoLibro(Request $request){
        $nuevoLibro = new Libro;
        
        $nuevoLibro->nombre = $request->nombre;
        $nuevoLibro->idIsbn = $request->idIsbn;
        $nuevoLibro->anio = $request->anio;
        $nuevoLibro->idAutor = 3;           //ARREGLAR ESTO
        $nuevoLibro->estado = 1;

        $nuevoLibro->save();

        return back()->with('mensaje', 'Libro Agregado!');

    }

    public function actualizar(Request $request){

        $libroactualizado = Libro::find($id);
        $libroactualizado->nombre = $request->nombre;
        $libroactualizado->anio = $request->anio;
        $libroactualizado->
        $libroactualizado->save();
        return back()->with('mensaje', 'Nota editada!');
    }

    /**
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
