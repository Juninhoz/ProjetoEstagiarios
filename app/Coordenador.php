<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    public $singular = 'Coordenador';
    public $plural = 'Coordenadores';

    protected $table = 'coordenadores';

    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];

    public function Setor()
    {
        return $this->hasOne('App\Setor');
    }
}