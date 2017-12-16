<?php

use Illuminate\Database\Seeder;

class seed_status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
        ['descricao_status' => 'Ativo'],
        ['descricao_status' => 'Inativo']
        ]);
    }
}
