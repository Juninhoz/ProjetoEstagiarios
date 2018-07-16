<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $singular = 'Curso';
    public $plural = 'Cursos';

    protected $table = 'cursos';

    protected $fillable = [
        'instituicao_id',
        'nome',
        'horario'
    ];

    public function Instituicao()
    {
        return $this->belongsTo('App\Instituicao');
    }
}
