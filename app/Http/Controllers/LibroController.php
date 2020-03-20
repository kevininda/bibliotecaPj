<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;


class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();

        $autores = Autor::all();
        
        return  view('libros', compact('libros','autores')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) : string{
        
        $request->validate([
            'nombre' => 'required|max:50',
            'idIsbn' => 'required|unique:libros',
            'anio' => 'required|numeric'
            /*---------------falta validar el idAutor---------------*/

        ]);

        $nuevoLibro = new Libro;
        
        $nuevoLibro->nombre = $request->nombre;
        $nuevoLibro->idIsbn = $request->idIsbn;
        $nuevoLibro->anio = $request->anio;
        $nuevoLibro->estado = 1;

        $idAutorConsulta = Autor::select('id')->where('nombre', 'Horacio')->first();
        $idAutor = $idAutorConsulta['id'];
        
        $nuevoLibro->idAutor = $idAutor;          
        $nuevoLibro->save();

        return "Libro creado";
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
     * Edit and store the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, int $id)
    {
        $libroActualizado = Libro::find($id);
        $libroActualizado->nombre = $request->nombre;
        $libroActualizado->anio = $request->anio;
        $libroActualizado->idAutor = $request->idAutor;

        $libroActualizado->save();
        
        return back()->with('mensaje', 'Libro editado!');
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
    public function destroy($id) : string
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return "Libro eliminado correctamente";

    }
}
