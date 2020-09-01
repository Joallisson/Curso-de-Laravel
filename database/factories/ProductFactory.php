<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->word(),
        'price' => 12.2,
        'descrição' => $faker->sentence()
    ];
});
