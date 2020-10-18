<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Publicacion;
use App\Public_x_Usuario;

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
     */
    public function store(Request $request)
    {
        // Store Publicacion
        if ($request->hasFile('POSTCONTENIDOMULTIMEDIA')) {
            $file = $request->file('POSTCONTENIDOMULTIMEDIA');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path("uploads/posts/"),$fileName);
        }

        $publicacion = new Publicacion();
        $publicacion->fill($request->all());
        $publicacion->GRUPOID = session('id-grupo');
        $publicacion->USERID = auth()->user()->id;
        $publicacion->POSTFECHAPUBLICACION = date('Y-m-d h:m:s', strtotime('-1 day'));
        $publicacion->save();

        $post_id = DB::getPdo()->lastInsertId();

        // Store Publicacion.Usuario
        $pxu = new Public_x_Usuario;
        $pxu->POSTID = $post_id;
        $pxu->USERID = auth()->user()->id;
        $pxu->PXUSAVANCE = $request->PXUSAVANCE;
        $pxu->save();

        return redirect('/grupos/show/'.session('id-grupo'));
    }

    public function show($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        return view('publicaciones/show', compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        return view('publicaciones/edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->fill($request->all());
        $publicacion->save();
        return redirect('/grupos/show/'.session('id-grupo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect('/grupos/show/'.session('id-grupo'));
    }

    public function search(Request $request)
    {
        $publicaciones = Publicacion::where([
            ['GRUPOID', session('id-grupo')],
            ['POSTTEXTO', 'like', '%'.$request->busqueda.'%']
        ])->get();
        return view('publicaciones/search', compact('publicaciones'));
    }
}
