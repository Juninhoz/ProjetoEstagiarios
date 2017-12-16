<?php

use Illuminate\Database\Seeder;

class estagiariosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estagiarios')->insert([    
        [
            'id_horario' => 1,
            'id_status' => 1,
            'nome_estagiario' => 'Karlla Danielly de Souza',
            'email_estagiario' => 'karla@semed.maceio',
            'telefone' => '12345',
            'data_contrato' => '2016-06-01',
            'pri_renovacao' => '2016-12-01',
            'seg_renovacao' => '2017-06-01',
            'ter_renovacao' => '2017-12-01-'
        ],
        [
            'id_horario' => 2,
            'id_status' => 1,
            'nome_estagiario' => 'Victor Aurélio Melo Paccola',
            'email_estagiario' => 'paccola@semed.maceio',
            'telefone' => '12345',
            'data_contrato' => '2016-11-11',
            'pri_renovacao' => '2017-05-11',
            'seg_renovacao' => '2017-11-11',
            'ter_renovacao' => '2018-05-11'
        ],
        [
            'id_horario' => 1,
            'id_status' => 1,
            'nome_estagiario' => 'José da Silva Duda Junior',
            'email_estagiario' => 'joseduda@semed.maceio',
            'telefone' => '12345',
            'data_contrato' => '2016-03-03',
            'pri_renovacao' => '2016-09-03',
            'seg_renovacao' => '2017-03-03',
            'ter_renovacao' => '2017-09-03'
        ],
        [
            'id_horario' => 2,
            'id_status' => 1,
            'nome_estagiario' => 'Antônio Aureliano Gomes Arruda ',
            'email_estagiario' => 'antonioa@semed.maceio',
            'telefone' => '12345',
            'data_contrato' => '2016-03-14',
            'pri_renovacao' => '2016-09-14',
            'seg_renovacao' => '2017-03-14',
            'ter_renovacao' => '2017-09-14'
        ],
        [
            'id_horario' => 1,
            'id_status' => 1,
            'nome_estagiario' => 'Leonardo Batista Moraes',
            'email_estagiario' => 'leonardo@semed.maceio',
            'telefone' => '12345',
            'data_contrato' => '2016-06-01',
            'pri_renovacao' => '2016-12-01',
            'seg_renovacao' => '2017-06-01',
            'ter_renovacao' => '2017-12-01'
        ],
        [
            'id_horario' => 2,
            'id_status' => 1,
            'nome_estagiario' => 'Victor Phellyppe Santos de Oliveira',
            'email_estagiario' => 'vitor@semed.maceio',
            'telefone' => '12345',
            'data_contrato' => '2015-10-05',
            'pri_renovacao' => '2016-04-05',
            'seg_renovacao' => '2016-10-05',
            'ter_renovacao' => '2017-04-05'
        ]
        ]);
    }
}
