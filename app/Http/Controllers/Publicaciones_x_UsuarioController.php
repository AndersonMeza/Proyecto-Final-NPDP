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
        $publicaciones_x_usuarios = new Public_x_Usuario();
        $publicaciones_x_usuarios->fill($request->all());
        $publicaciones_x_usuarios->save();
        return redirect('publicaciones_x_usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post,$user)
    {
        $publicaciones_x_usuarios = Public_x_Usuario::where([['POSTID', $post],['USERID',$user]])->get();
        return view('publicaciones_x_usuario/show', compact('publicaciones_x_usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post, $user)
    {
        $publicaciones_x_usuarios = Public_x_Usuario::where([['POSTID', $post],['USERID',$user]])->get();
        return view('publicaciones_x_usuario/edit', compact('publicaciones_x_usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post, $user)
    {
        $publicaciones_x_usuarios = Public_x_Usuario::where([['POSTID', $post],['USERID',$user]])->get();
        
        foreach ($publicaciones_x_usuarios as $pub)
            $pub->update($request->all());

        return redirect('publicaciones_x_usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post, $user)
    {
        Public_x_Usuario::where([['POSTID', $post],['USERID',$user]])->delete();
        return redirect('publicaciones_x_usuario');
    }
}
