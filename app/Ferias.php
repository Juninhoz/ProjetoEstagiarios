<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ferias extends Model
{
    protected $table = 'ferias';

    public $timestamps = 'true';

    protected $fillable = [
        'data_inicio','data_termino','data_retorno',
    ];

    public function Estagiario()
    {
        return $this->belongsTo('App\Estagiario','id_estagiario');
    }

}
