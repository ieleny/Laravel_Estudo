<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{   

    protected $fillable = ['nome'];

    public function avaliacoes()
    {
        return $this->hasMany('app\AvaliacaoUsuario');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
