<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicacion';
    protected $primaryKey = 'POSTID';
    public $timestamps = false;
    protected $fillable = [
        'POSTID',
        'GRUPOID',
        'USERID',
        'POSTCONTENIDOMULTIMEDIA',
        'POSTTEXTO',
        'POSTFECHAPUBLICACIÓN',
        'POSTCOMENTARIOS',
        'POSTADVERTENCIA',
        'POSTFECHAENTREGA'];
}
