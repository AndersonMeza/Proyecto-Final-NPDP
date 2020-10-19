<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Public_x_Usuario;
use App\Publicacion;
use App\Usuario;

class Publicaciones_x_UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones_x_usuarios=Public_x_Usuario::all();
        return view('/publicaciones_x_usuario/index', compact('publicaciones_x_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $publicaciones = Publicacion::all();
        $usuarios = Usuario::all();
        return view('publicaciones_x_usuario/create', compact('publicaciones','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Public_x_Usuario::insert([
            'PXUSCOMENTARIO' => $request->comentario,
            'USERID' => auth()->user()->id,
            'POSTID' => $request->publicacion,
        ]);

        $publicacion = Publicacion::find($request->publicacion);
        $publicacion->POSTCOMENTARIOS = 1;
        $publicacion->save();

        return redirect('grupos/show/'.$request->grupo);
    }

    /**
     * Display the specified resource.
     */
    public function show($post,$user)
    {
        $publicaciones_x_usuarios = Public_x_Usuario::where([['POSTID', $post],['USERID',$user]])->get();
        return view('publicaciones_x_usuario/show', compact('publicaciones_x_usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pub = Public_x_Usuario::find($id);
        return view('publicaciones_x_usuario/edit', compact('pub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pub = Public_x_Usuario::find($id);
        $pub->update($request->all());
        return redirect('/grupos/show/'.session('id-grupo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Public_x_Usuario::find($id)->delete();
        return redirect('/grupos/show/'.session('id-grupo'));
    }
}
