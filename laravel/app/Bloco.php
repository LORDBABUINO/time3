<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    //

    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected  $fillable = [
    'descricao',
    'nome',
    ];
    
    
    protected $casts = [
        'descricao' => 'text',
        'nome' => 'text',
    ];
    
    public function rota()
    {
        return $this->hasMany('App\Rota');
    }
    
    public function campus()
    {
        return $this->belongsTo('App\Campus','bloco_fk_campus');
    }
    public function salas()
    {
        return $this->hasMany('App\Salas');
    }
}
