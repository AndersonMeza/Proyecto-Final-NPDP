<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Grupo;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos=Grupo::all();
        return view('/grupos/index', compact('grupos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opcion = $request->GRUPO;

        $grupo = new Grupo;
        $grupo->GRUPONOMBRE = $request->GRUPONOMBRE;
        if ($opcion == "nuevo") {
            $grupo->GRUPONUEVO = 1;
            $grupo->GRUPOEXISTENTE = 0;
        }
        else {
            $grupo->GRUPONUEVO = 0;
            $grupo->GRUPOEXISTENTE = 1;
        }
        $grupo ->save();

        return redirect('grupos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo = Grupo::findOrFail($id);
        return view('grupos/show', compact('grupo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = Grupo::findOrFail($id);
        return view('grupos/edit', compact('grupo'));
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
        dd($request->GRUPO);
        $grupo = Grupo::findOrFail($id);
        $grupo->fill($request->all());
        $grupo->save();
        return redirect('grupos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grupo::destroy($id);
        return redirect('grupos');
    }
}
