<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_x_Usuario extends Model
{
    protected $table = 'grupo_x_usuario';
    protected $primaryKey = 'GDXUI';
    public $timestamps = false;
    protected $fillable = ['GRUPOID','USERID','GDXUI','GXUSOLICITUD','GXUROL'];
}
