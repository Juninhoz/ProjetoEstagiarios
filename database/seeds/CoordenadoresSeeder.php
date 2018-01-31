<?php

use Illuminate\Database\Seeder;

class CoordenadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordenadores')->insert([
            ['nome' => 'dudinha junior', 'email' => 'duda@gmail.com', 'telefone' => '12345']
        ]);
    }
}
