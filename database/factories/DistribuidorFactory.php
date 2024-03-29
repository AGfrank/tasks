<?php

use Faker\Generator as Faker;

$factory->define(App\Distribuidor::class, function (Faker $faker) {
    return [
        'login' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});
