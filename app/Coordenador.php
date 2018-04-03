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
}