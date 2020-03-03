<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Usuarios;
use Faker\Generator as Faker;

$factory->define(App\Usuarios::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'mail' => $faker->email,
      'password' => $faker->password,
    ];
});
