<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    public $singular = 'Coordenador';
    public $plural = 'Coordenadores';

    protected $table = 'estagiarios';

    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];


}
