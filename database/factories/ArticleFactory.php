<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50),
        'department' => $faker->text(50)
    ];
});
