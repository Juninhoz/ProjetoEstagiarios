<?php

use Illuminate\Database\Seeder;

class seed_horario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horario')->insert([
            ['descricao_horario' => 'Matutino'],
            ['descricao_horario' => 'Vespertino']
        ]);
    }
}
