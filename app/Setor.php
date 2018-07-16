<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    public $singular = 'Setor';
    public $plural = 'Setores';

    protected $table = 'setores';

    protected $fillable = [
        'coordenador_id',
        'nome',
    ];

    public function Coordenador()
    {
        return $this->belongsTo('App\Coordenador');
    }

    public function Estagiario()
    {
        return $this->hasMany('App\Estagiario');
    }
}
