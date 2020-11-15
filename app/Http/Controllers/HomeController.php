<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuario = User::find(auth()->user()->id); 
        $publicaciones = array();
        $userid = auth()->user()->id;
        foreach ($usuario->grupos as $grupo)
        {   
            $flag = false;
            foreach ($grupo->uxg as $usuario)
                if (($usuario->USERID == $userid) && ($usuario->GXUSOLICITUD == 1))
                    $flag = true; // Usuario ha sido aceptado en el grupo
            if ($flag)
                foreach ($grupo->publicaciones as $publicacion)
                    $publicaciones[] = $publicacion;
        }

        $publicaciones = array_reverse($publicaciones);  

        return view('home', compact('usuario', 'publicaciones'));
    }
}
