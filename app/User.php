<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','curso','nivel','fotografia','nacimiento','active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Consulta los grupos a los que pertenece un usuario
    public function grupos()
    {
        return $this->belongsToMany('App\Grupo', 'grupo_x_usuario', 'USERID', 'GRUPOID');
    }

    // Consulta registros en la tabla intermedia
    public function gxu()
    {
        return $this->hasMany('App\Grupo_x_Usuario', 'USERID');
    }
}
