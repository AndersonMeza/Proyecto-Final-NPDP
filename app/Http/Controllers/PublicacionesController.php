<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Publicacion;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones=Publicacion::all();
         return view('/publicaciones/index', compact('publicaciones'));

    }/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicaciones/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion = date('Y-m-d h:m');
        $entrega = $request->POSTFECHAENTREGA;

        if ($entrega < $publicacion) 
            return redirect('publicaciones/create');
        else
        {
            $publicacion = new Publicacion();
            $publicacion->POSTFECHAPUBLICACION = $publicacion;
            $publicacion->fill($request->all());
            $publicacion->save();
            return redirect('publicaciones');
        }
    }

    /**publicacion  *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        return view('publicaciones/show', compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        return view('publicaciones/edit', compact('publicacion'));
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
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->fill($request->all());
        $publicacion->save();
        return redirect('publicaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect('publicaciones');
    }
}
