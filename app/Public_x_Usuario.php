<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Public_x_Usuario extends Model
{
    protected $table = 'publicacion_x_usuario';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['POSTID','USERID','PXUSCOMENTARIO','PXUSAVANCE','PXUSCALIFICACION'];
}
