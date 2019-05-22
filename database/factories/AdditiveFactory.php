<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Additive;
use Faker\Generator as Faker;

$factory->define(Additive::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'last_update' => $faker->dateTimeBetween('-1 year' ,'now')
    ];
});
