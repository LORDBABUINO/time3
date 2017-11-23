<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
   protected $fillable = ['campus_nome', 'campus_logradouro', 'campus_complemento', 'campus_cidade', 'campus_uf'];
   protected $table='campuss';
}
