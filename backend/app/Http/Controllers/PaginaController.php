<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pagina::all();
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
        $pagina = New Pagina();
        $pagina->url = $request->url;
        $pagina->estado = $request->estado;
        $pagina->nombre = $request->nombre;
        $pagina->descripcion = $request->descripcion;
        $pagina->icono = $request->icono;
        $pagina->tipo = $request->tipo;
        $pagina->fecha_creacion = $request->fecha_creacion;
        $pagina->fecha_modifiacion = $request->fecha_modifiacion;
        $pagina->save();
        return "Guardado exitoso";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pagina::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagina $pagina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pagina = Pagina::find($id);
        $pagina->url = $request->url;
        $pagina->estado = $request->estado;
        $pagina->nombre = $request->nombre;
        $pagina->descripcion = $request->descripcion;
        $pagina->icono = $request->icono;
        $pagina->tipo = $request->tipo;
        $pagina->fecha_creacion = $request->fecha_creacion;
        $pagina->fecha_modifiacion = $request->fecha_modifiacion;
        $pagina->save();
        return "Actualizado exitoso";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagina = Pagina::find($id);
        $pagina->delete();
    }
}
