<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'description' => $faker->paragraph(),
        'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        'price' => rand(1000,99999)
    ];
});
