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

    public function autor()
    {
        return $this->belongsTo('App\User', 'USERID');
    }

    public function grupo()
    {
        return $this->belongsTo('App\Grupo', 'GRUPOID');
    }

    public function pxu()
    {
        return $this->hasMany('App\Public_x_Usuario', 'POSTID', 'POSTID');
    }
}
