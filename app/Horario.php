<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios'; 

    public $timestamps = 'true';

    protected $fillable = ['descricao_horario'];

    public function Estagiario()
    {
        return $this->belongsTo('App\Estagiario');
    }
}
