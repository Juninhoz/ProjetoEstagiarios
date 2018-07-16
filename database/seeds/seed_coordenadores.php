<?php

use Illuminate\Database\Seeder;

class seed_coordenadores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordenadores')->insert([
            ['nome' => 'Gilson Laurindo', 'email' => 'gilson@gmail.com','telefone' => '82 9999999'],
            ['nome' => 'Junior Duda', 'email' => 'duda@gmail','telefone' => '82 9999999'],
            ['nome' => 'Randson Douglas', 'email' => 'randson@gmail','telefone' => '82 9999999']
        ]);
    }
}
