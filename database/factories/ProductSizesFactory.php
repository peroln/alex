<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProductSize;
use Faker\Generator as Faker;
use App\Product;

$factory->define(ProductSize::class, function (Faker $faker) {
    $productsIds = Product::pluck('id');
    return [
//        'product_id' =>  $productsIds->pull(rand(0,count($productsIds))),
        'product_id' => $productsIds->random(),
        'name' => $faker->word,
        'price' => $faker->randomFloat(2, 1, 100),
        'last_update' => $faker->dateTimeBetween('-1 year', 'now')
    ];
});
