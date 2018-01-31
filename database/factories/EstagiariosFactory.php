<?php
use Faker\Generator as Faker;

$factory->define(App\Estagiario::class, function (Faker $faker) {
    return [
        'horario_id' => 1,
        'status_id' => 1,
        'setor_id' => 8,
        'nome' => $faker->name(),
        'email' => $faker->email(),
        'telefone' => $faker->phoneNumber(),
        'data_contrato' => $faker->date(),
        'pri_renovacao' => $faker->date(),
        'seg_renovacao' => $faker->date(),
        'ter_renovacao' => $faker->date(),
        'fim_contrato' => $faker->date(),
    ];
});