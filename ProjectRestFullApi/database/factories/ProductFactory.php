<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->realText(rand(20, 60)),
        'quantity' => $faker->numberBetween(1, 100),
        'price' => $faker->randomFloat(2 , 10, 1000),
    ];
});
