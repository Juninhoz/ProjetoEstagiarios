<?php

use Carbon\Carbon;
use App\Estagiario;

function boasVindas()
{
    $h = date('G');
    if ($h >= 5 && $h <= 11) {
        return "Bom dia";
    }
    if ($h >= 12 && $h <= 18) {
        return "Boa tarde";
    }
    return "Boa noite";
}

function doBancoData($data, $formato = 'd/m/Y')
{
    if (!is_null($data)) {
        return Carbon::parse($data)->format($formato);
    }
    return '';
}

function paraBancoData($data, $formato = 'd/m/Y')
{
    if (validateDate($data, $formato)) {
        return Carbon::createFromFormat($formato, $data);
    }
    return null;
}

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function calculaRenovacoesEstagiario(Estagiario $estagiario)
{   
    $data_contrato = Carbon::createFromFormat('Y-m-d', $estagiario->data_contrato);
    $estagiario->pri_renovacao = $data_contrato->addMonth(6)->toDateString();
    $estagiario->seg_renovacao = $data_contrato->addMonth(6)->toDateString();
    $estagiario->ter_renovacao = $data_contrato->addMonth(6)->toDateString();
    $estagiario->fim_contrato  = $data_contrato->addMonth(6)->toDateString();

    return $estagiario;
}

function verificaRenovaçõesEstagiario($estagiario)
{
    $message = Array();
    $qtdAvisos;

    foreach($estagiario as $estage){

        $primeiraRenovacao = date("m",strtotime($estage->pri_renovacao));
        $anoPrimeiraRenovacao = date("Y",strtotime($estage->pri_renovacao));

        $segundaRenovacao = date("m",strtotime($estage->seg_renovacao));
        $anoSegundaRenovacao = date("Y",strtotime($estage->seg_renovacao));

        $terceiraRenovacao = date("m",strtotime($estage->ter_renovacao));
        $anoTerceiraRenovacao = date("Y",strtotime($estage->ter_renovacao));

        $notificacoes = Array();

        if( $primeiraRenovacao == date("m") && $anoPrimeiraRenovacao == date("Y")){

            if(strtotime(date('Y-m-d')) > strtotime($estage->pri_renovacao)) {
                $notificacoes['notificacao'] = '';
            } else {
                $notificacoes['id_estagiario'] = $estage->id;
                $notificacoes['nome_estagiario'] = $estage->nome_estagiario;
                $notificacoes['notificacao'] = "Estagiario " . $estage->nome_estagiario . " tem a 1 renovacao";

                $notificacoes['notificacaoDias'] = $this->calculaDiferençaEntreDatas($estage->pri_renovacao,"1");
            }

            array_push($message,$notificacoes);

        } else if( $segundaRenovacao == date("m") && $anoSegundaRenovacao == date("Y") ){

            if(strtotime(date('Y-m-d')) > strtotime($estage->seg_renovacao)) {
                $notificacoes['notificacao'] = '';
            } else {
                $notificacoes['id_estagiario'] = $estage->id;
                $notificacoes['nome_estagiario'] = $estage->nome_estagiario;
                $notificacoes['notificacao'] = "Estagiario " . $estage->nome_estagiario . " tem a 2 renovacao";

                $notificacoes['notificacaoDias'] = $this->calculaDiferençaEntreDatas($estage->seg_renovacao,"2");
            }
            array_push($message,$notificacoes);

        } else if( $terceiraRenovacao == date("m") && $anoTerceiraRenovacao == date("Y") ){

            if(strtotime(date('Y-m-d')) > strtotime($estage->ter_renovacao)) {
                $notificacoes['notificacao'] = '';
            } else {
                $notificacoes['id_estagiario'] = $estage->id;
                $notificacoes['nome_estagiario'] = $estage->nome_estagiario;
                $notificacoes['notificacao'] = "Estagiario " . $estage->nome_estagiario . " tem a 3 renovacao";

                $notificacoes['notificacaoDias'] = $this->calculaDiferençaEntreDatas($estage->ter_renovacao,"3");
            }
            array_push($message,$notificacoes);
        }
    }
    return $message;
}

function calculaDiferençaEntreDatas($dataCalculo,$nrRenovacao)
{
    if(strtotime(date('Y-m-d')) > strtotime($dataCalculo)) {
        return null;
    } else {
        $time_inicial = strtotime(date('Y-m-d'));
        $time_final = strtotime($dataCalculo);
        $diferenca = $time_final - $time_inicial;

        $dias = (int)floor( $diferenca / (60 * 60 * 24) );

        return "Precisará fazer a " . $nrRenovacao . " º renovação em " .$dias . " dia(s).";
    }
}
