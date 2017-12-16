<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    public $timestamps = 'true';

    protected $fillable = [
        'descricao_status','observacao',
    ];

    public function Estagiario()
    {
        return $this->belongsTo('App\Estagiario');
    }
}
