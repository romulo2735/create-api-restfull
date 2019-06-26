<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Company;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'fantasyName' => $faker->company,
        'email' => $faker->email,
        'cnpj' => 79846521325468,
    ];
});
