<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_x_Usuario extends Model
{
    protected $table = 'grupo_x_usuario';
    public $timestamps = false;
    protected $fillable = ['GRUPOID','USERID','GXUSOLICITUD','GXUROL'];
}
