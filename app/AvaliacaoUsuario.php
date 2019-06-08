<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoUsuario extends Model
{
    protected $fillable = [
        'usuario_id',
        'nota'
    ];

    public function usuario()
    {
        return $this->belongsTo('app\LoginModel');
    }
    
}
