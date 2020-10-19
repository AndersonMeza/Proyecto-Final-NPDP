<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
         
class Grupo extends Model
{
    protected $table = 'grupo';
    protected $primaryKey = 'GRUPOID';
    public $timestamps = false;
    protected $fillable = ['GRUPOID','GRUPONOMBRE','GRUPODESC', 'GRUPONUEVO','GRUPOEXISTENTE'];

    public function publicaciones()
    {
        return $this->hasMany('App\Publicacion', 'GRUPOID', 'GRUPOID');
    }

    public function uxg()
    {
        return $this->hasMany('App\Grupo_x_Usuario', 'GRUPOID', 'GRUPOID');
    }

    public function usuarios()
    {
        return $this->belongsToMany('App\User', 'grupo_x_usuario', 'GRUPOID', 'USERID');
    }
}
