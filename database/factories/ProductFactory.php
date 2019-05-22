<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;
use App\User;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'foreign_id' => $faker->numberBetween(1, 5),
        'client_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'name' => $faker->word,
        'descr' => $faker->sentence(14),
        'price' => $faker->randomFloat(2,1, 100),
        'popular' => rand(1,8),
        'category_id' => function(){
        return factory(App\Category::class)->create()->id;
        },
        'last_update' => $faker->dateTimeBetween('-1 year', 'now')
    ];
});
