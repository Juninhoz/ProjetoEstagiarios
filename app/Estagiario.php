<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model {

    public $singular = 'Estagiario';
    public $plural = 'Estagiarios';

    protected $table = 'estagiarios';

    protected $fillable = [
        'nome',
        'email',
        'horario_id',
        'instituicao_id',
        'curso_id',
        'status_id',
        'setor_id',
        'telefone',
        'data_contrato',
        'horario',
        'imagem',
        'pri_renovacao',
        'seg_renovacao',
        'ter_renovacao',
        'fim_contrato'
    ];

    public function Horario()
    {
        return $this->belongsTo('App\Horario','horario_id');
    }

    public function Ferias()
    {
        return $this->hasMany('App\Ferias','id_estagiario');
    }

    public function Status()
    {
        return $this->hasOne('App\Status', 'status_id');
    }

    public function Setor()
    {
        return $this->belongsTo('App\Setor', 'setor_id');
    }
    
    // public function getDataContratoAttribute($val)
    // {
    //     return doBancoData($val);
    // }
}
