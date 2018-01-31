<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('seed_horario');
        $this->call('seed_status');
        $this->call('CoordenadoresSeeder');
        $this->call('setoresSeeder');
        $this->call('estagiariosSeed');
    }
}
