<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horario'; 

    public $timestamps = 'true';

    protected $fillable = ['descricao_horario'];

    public function Estagiario()
    {
        return $this->hasOne('App\Estagiario','id_estagiario');
    }
}
