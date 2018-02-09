<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model {
    
    protected $table = 'estagiarios';

    protected $fillable = [
        'nome',
        'email',
        'horario_id',
        'status_id',
        'setor_id',
        'telefone',
        'data_contrato',
        'horario',
        'pri_renovacao',
        'seg_renovacao',
        'ter_renovacao',
        'fim_contrato',
        'id_horario',
        'id_status'
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

    public function setDataContratoAttribute($val)
    {
        $this->attributes['data_contrato'] = paraBancoData($value);
    }

    public function getDataContratoAttribute($val)
    {
        return doBancoData($val);
    }

    public function setNomeAttribute($val)
    {
        $this->attributes['nome'] = $value . "eauaehuuhae";
    }

    public function getNomeAttribute($val)
    {
        return $val . "aehuaehue";
    }
}
