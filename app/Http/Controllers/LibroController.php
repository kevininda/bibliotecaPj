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
        $libros = Libro::orderBy('anio', 'DESC')->paginate(10);

        $autores = Autor::orderBy('nombre', 'DESC')->paginate(10);
        
        return  view('libros', compact('libros','autores')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $nuevoLibro = new Libro;
        
        $nuevoLibro->nombre = $request->nombre;
        $nuevoLibro->idIsbn = $request->idIsbn;
        $nuevoLibro->anio = $request->anio;
        $nuevoLibro->estado = 1;

        $idAutorConsulta = Autor::select('id')->where('nombre', 'Roberto')->first();
        $idAutor = $idAutorConsulta['id'];
        
        $nuevoLibro->idAutor = $idAutor;          
        $nuevoLibro->save();

        return back()->with('mensaje', 'Libro Agregado!');
    }
    

    public function actualizarLibro(Request $request){

        $libroactualizado = Libro::find($id);
        $libroactualizado->nombre = $request->nombre;
        $libroactualizado->anio = $request->anio;
        $libroactualizado->idAutor = $request->idAutor;
        $libroactualizado->save();
        return back()->with('mensaje', 'Libro editado!');
    }

    public function nuevoAutor(Request $request){
        $autorNuevo = new Autor;

        $autorNuevo->nombre = $request->nombre;
        $autorNuevo->apellido = $request->apellido;

        $autorNuevo->save();

        return back()->with('mensaje', 'Autor Agregado!');
    }

    public function actualizarAutor(Request $request){

        $autorActualizado = Libro::find($id);
        $autorActualizado->nombre = $request->nombre;
        $autorActualizado->apellido = $request->apellido;

        $autorActualizado->save();
        return back()->with('mensaje', 'Autor editado!');
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
