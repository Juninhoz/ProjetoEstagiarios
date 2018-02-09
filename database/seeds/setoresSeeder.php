<?php

use Illuminate\Database\Seeder;

class setoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setores')->insert([
            ['coordenador_id' => 1, 'nome' => 'informatica'],
            ['coordenador_id' => 2, 'nome' => 'Recursos Humanos'],
            ['coordenador_id' => 1, 'nome' => 'Recursos Humanos']
        ]);
    }
}
