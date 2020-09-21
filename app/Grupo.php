<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo';
    protected $primaryKey = 'GRUPOID';
    public $timestamps = false;
    protected $fillable = ['GRUPOID','GRUPONOMBRE','GRUPONUEVO','GRUPOEXISTENTE'];
}
