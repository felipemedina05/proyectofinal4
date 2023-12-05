<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return Enlace::all();
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
        $enlace = New Enlace();
        $enlace->id_pagina = $request->id_pagina;
        $enlace->id_rol = $request->id_rol;
        $enlace->description = $request->description;
        $enlace->fecha_creacion = $request->fecha_creacion;
        $enlace->fecha_modifiacion = $request->fecha_modifiacion;        $enlace->save();
        return "Guardado exitoso";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Enlace::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function edit(Enlace $enlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $enlace = Enlace::find($id);
        $enlace->id_pagina = $request->id_pagina;
        $enlace->id_rol = $request->id_rol;
        $enlace->description = $request->description;
        $enlace->usuario_creacion = $request->usuario_creacion;
        $enlace->usuario_modificacion = $request->usuario_modificacion;
        $enlace->save();
        return "Actualizado exitoso";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enlace = Enlace::find($id);
        $enlace->delete();
        return "Eliminado exitoso"; 
    }
}
