<?php

function calculaRenovacoesEstagiario(\App\Estagiario $estage)
{
    $estage->data_contrato = implode("-",array_reverse(explode("/", $estage->data_contrato)));

    $estage->pri_renovacao = date('Y/m/d',strtotime($estage->data_contrato . "+6 months"));

    $estage->seg_renovacao = date('Y/m/d',strtotime($estage->data_contrato . "+12 months"));

    $estage->ter_renovacao = date('Y/m/d',strtotime($estage->data_contrato . "+18 months"));

    return $estage;
}

function converteExibicaoDeDatas($estage)
{
    $i = 0;
    foreach($estage as $est){
        $estage[$i]->data_contrato = implode("/",array_reverse(explode("-", $est->data_contrato)));
        $estage[$i]->pri_renovacao = implode("/",array_reverse(explode("-", $est->pri_renovacao)));
        $estage[$i]->seg_renovacao = implode("/",array_reverse(explode("-", $est->seg_renovacao)));
        $estage[$i]->ter_renovacao = implode("/",array_reverse(explode("-", $est->ter_renovacao)));
        $estage[$i]->fim_contrato =  implode("/",array_reverse(explode("-", $est->fim_contrato)));
        $i++;
    }
    return $estage;
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
