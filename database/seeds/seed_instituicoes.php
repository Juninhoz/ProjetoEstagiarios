<?php

use Illuminate\Database\Seeder;

class seed_instituicoes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituicoes')->insert([
            ['nome' => 'IFAL', 'endereco' => 'rua 1', 'bairro' => 'Centro'],
            ['nome' => 'CESMAC', 'endereco' => 'rua 2', 'bairro' => 'Poço'],
            ['nome' => 'Mauricio de Nassau', 'endereco' => 'rua 3', 'bairro' => 'Farol'],
            ['nome' => 'UNIFAL', 'endereco' => 'rua 4', 'bairro' => 'Benedito Bentes'],
        ]);
    }
}
