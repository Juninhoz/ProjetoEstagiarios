<?php

use Illuminate\Database\Seeder;

class seed_cursos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            ['instituicao_id' => '1', 'nome' => 'Sistemas de Informação', 'horario' => 'Noturno'],
            ['instituicao_id' => '1', 'nome' => 'Matematica', 'horario' => 'Vespertino'],
            ['instituicao_id' => '2', 'nome' => 'Fisica', 'horario' => 'Noturno'],
            ['instituicao_id' => '2', 'nome' => 'Sistemas de Informação', 'horario' => 'Noturno'],
            ['instituicao_id' => '3', 'nome' => 'Historia', 'horario' => 'Noturno'],
            ['instituicao_id' => '3', 'nome' => 'Sociologia', 'horario' => 'Noturno'],
            ['instituicao_id' => '4', 'nome' => 'Quimica', 'horario' => 'Vespertino'],
            ['instituicao_id' => '4', 'nome' => 'Ciencia da Computação', 'horario' => 'Vespertino'],
        ]);
    }
}
