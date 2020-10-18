<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Grupo;
use App\Grupo_x_Usuario;

class GruposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grupos=Grupo::all();
        foreach ($grupos as $grupo)
            foreach ($grupo->uxg as $usuario)
                if ($usuario->GXUROL == 1)
                    foreach ($grupo->usuarios as $user)
                        if ($user->id == $usuario->USERID)
                                $grupo->admin = $user->name;
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
     */
    public function store(Request $request)
    {
        // Store Grupo
        if ($request->hasFile('GRUPOFONDO')) {
            $file = $request->file('GRUPOFONDO');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path("uploads/grupos/"),$fileName);
        }

        $opcion = $request->GRUPO;

        $grupo = new Grupo;
        $grupo->GRUPONOMBRE = $request->GRUPONOMBRE;
        $grupo->GRUPODESC = $request->GRUPODESC;
        if ($request->hasFile('GRUPOFONDO')) 
            $grupo->GRUPOFONDO = $fileName;
        if ($opcion == "nuevo") {
            $grupo->GRUPONUEVO = 1;
            $grupo->GRUPOEXISTENTE = 0;
        }
        else {
            $grupo->GRUPONUEVO = 0;
            $grupo->GRUPOEXISTENTE = 1;
        }
        $grupo ->save();

        $grupo_id = DB::getPdo()->lastInsertId();

        // Store Usuario.Grupo
        $gxu = new Grupo_x_Usuario;
        $gxu->GRUPOID = $grupo_id;
        $gxu->USERID = auth()->user()->id;
        $gxu->GXUSOLICITUD = 1;
        $gxu->GXUROL = 1;
        $gxu ->save();

        return redirect('grupos/show/'.$grupo_id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        session()->put('id-grupo', $id);
        $grupo = Grupo::findOrFail($id);
        session()->put('foto-grupo', $grupo->GRUPOFONDO);
        
        session()->forget('id-admin');
        foreach ($grupo->uxg as $usuario)
            if ($usuario->GXUROL == 1)
                session()->put('id-admin', $usuario->USERID);
        
        $publicaciones = array();
        foreach ($grupo->publicaciones as $publicacion)
            $publicaciones[] = $publicacion;
        $publicaciones = array_reverse($publicaciones);  

        return view('grupos/show', compact('grupo', 'publicaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $grupo = Grupo::findOrFail($id);
        $usuarios = array();
        foreach ($grupo->uxg as $usuario)
            if ($usuario->GXUSOLICITUD == 0)
                foreach ($grupo->usuarios as $user)
                    if ($user->id == $usuario->USERID)
                        $usuarios[] = $user;

        return view('grupos/edit', compact('grupo', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $opcion = $request->GRUPO;

        if ($request->hasFile('GRUPOFONDO')) {
            $file = $request->file('GRUPOFONDO');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path("uploads/grupos/"),$fileName);
        }

        $grupo = Grupo::findOrFail($id);
        $grupo->GRUPONOMBRE = $request->GRUPONOMBRE;
        $grupo->GRUPODESC = $request->GRUPODESC;
        if ($request->hasFile('GRUPOFONDO')) 
            $grupo->GRUPOFONDO = $fileName;
        $grupo->save();

        return redirect('/grupos/show/'.session('id-grupo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Grupo::destroy($id);
        return redirect('grupos');
    }

    public function join($idg, $idu)
    {
        Grupo_x_Usuario::insert([
            'GRUPOID' => $idg,
            'USERID' => $idu,
        ]);
        
        return redirect('grupos')->with('status', 'Solicitud Enviada');
    }

    public function check($idu, $op)
    {
        $gxu = Grupo_x_Usuario::where([
            ['USERID', $idu],
            ['GRUPOID', session('id-grupo')],
        ])->update(['GXUSOLICITUD' => $op]);
        
        return redirect('grupos/edit/'.session('id-grupo'))->with('status', 'Solicitud Enviada');
    }
}
