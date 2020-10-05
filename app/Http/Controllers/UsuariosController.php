<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Usuario;

class UsuariosController extends Controller
{
    /**
     * Despliega una lista de recursos
     */
    public function index()
    {
        //$usuarios = DB::table('usuario')->all();
        $usuarios = Usuario::where('USERACTIVO', 1)->get();
        return view('/usuarios/index', compact('usuarios'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso
     */
    public function create()
    {
        return view('usuarios/create');
    }

    /**
     * Almacena un nuevo recurso creado en la base
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        if ($request->hasFile('USERFOTOGRAFIA')) {
            $file = $request->file('USERFOTOGRAFIA');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path("uploads/users/"),$fileName);
        }

        $usuario = new Usuario();
        $usuario->fill($request->all());
        if ($request->hasFile('USERFOTOGRAFIA')) 
            $usuario->USERFOTOGRAFIA = $fileName;
        $usuario->save();
        return redirect('usuarios');
    }

    /**
     * Despliega el recurso especificado
     * @param  int  $id
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
       // $usuario = Usuario::where('USERID', $id)->get();
        return view('usuarios/show', compact('usuario'));
    }

    /**
     * Muestra el formulario para editar un recurso
     * @param  int  $id
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        // $usuario = Usuario::where('USERID', $id)->get();
        return view('usuarios/edit', compact('usuario'));
    }

    /**
     * Se actualiza el registro especificado en la base
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('USERFOTOGRAFIA')) {
            $file = $request->file('USERFOTOGRAFIA');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path("uploads/users/"),$fileName);
        }

        $usuario = Usuario::findOrFail($id);
        $usuario->fill($request->all());
        if ($request->hasFile('USERFOTOGRAFIA'))
            $usuario->USERFOTOGRAFIA = $fileName;
        $usuario->save();
        return redirect('usuarios');
    
    }

    /**
     * Remueve el recurso especificado de la base
     * @param  int  $id
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->save();
        $grupo->USUARIO = 0;
        return redirect('usuarios'); 
    }
} 