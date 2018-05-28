<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    public $singular = 'Instituição';
    public $plural = 'Instituições';
    
    protected $table = 'instituicoes';

    protected $fillable = [
        'nome',   
        'endereco',
        'bairro'
    ];

    public function Curso()
    {
        return $this->hasMany('App\Curso');
    }
}
