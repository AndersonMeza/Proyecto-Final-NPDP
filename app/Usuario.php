<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'USERID';
    public $timestamps = false;
    protected $fillable = [ //se indica que campos de la tabla vana ser llenados
        'USERID', 
        'USERNOMBRE', 
        'USEREMAIL',
        'USERCURSO', 
        'USERNIVEL',
        'USERFOTOGRAFIA',
        'USERFECHANACIMIENTO',
        'USERPASSWORD',
        'USERACTIVO',
    ];
}
