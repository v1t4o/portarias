<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ocorrencia;
use Faker\Generator as Faker;
use App\User;

$factory->define(Ocorrencia::class, function (Faker $faker) {
    $tipos = ['saida','entrada','registro']; 
    return [
        'patrimonio' => $faker->numberBetween($min = 1000, $max = 9000),
        'tipo' => $tipos[array_rand($tipos)],  
        'comentario' => $faker->sentence,
        'user_id' => factory(User::class)->create()->id,
        'data_ocorrencia' => $faker->dateTime, 
    ];
});


