<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(App\Paciente::class, function (Faker\Generator $faker) {
    return [
        //$faker->locale('pt_BR'),
        'nome' => $faker->firstName($gender = null|'male'|'female').' '.$faker->lastName,
        'sexo' => 'masculino',
        'dtnascimento' => $faker->date('Y-m-d'),
        'profissao'   => 'Profissional Liberal',
        'escolaridade' => 'fundamental',
        'identidade'  => $faker->randomNumber($nbDigits = NULL),
        'cpf' => $faker->randomNumber($nbDigits = NULL),
        'status' => '1',
    ];
});
