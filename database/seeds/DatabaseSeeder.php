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
        $this->call('seed_instituicoes');
        $this->call('seed_cursos');
        $this->call('seed_coordenadores');
        $this->call('seed_setores');
    }
}
