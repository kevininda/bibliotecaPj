<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        
        return $autores;
        //return  view('autores', compact('autores')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
        ]);
        $autorNuevo = new Autor;

        $autorNuevo->nombre = $request->nombre;
        $autorNuevo->apellido = $request->apellido;

        $autorNuevo->save();

        return "Autor agregado con exito";

        //return back()->with('mensaje', 'Autor Agregado!');
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
        return Autor::findOrFail($id);

    }

    /**
     * Edita registro pasado por request
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request) : string
    {
        $autorActualizado = Autor::findOrFail($request->id);
        $autorActualizado->nombre = $request->nombre;
        $autorActualizado->apellido = $request->apellido;

        $autorActualizado->save();
        
        return "Autor actualizado";
        
        //return back()->with('mensaje', 'Autor editado!');
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
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return "Autor eliminado con exito.";
    }
}
