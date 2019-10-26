<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return array(
        'name' => $faker->realText(100),
        'sub_title' => $faker->realText(200),
        'category_id' => Category::all()->random()->id,
        'price' => $faker->randomFloat(2, 10, 500),
        'sale_price' => $faker->randomFloat(2, 8, 400),
        'description' => $faker->realText(),
        'weight' => $faker->randomFloat(2, 1, 10),
        'stock' => $faker->numberBetween(0, 500),
        'featured' => $faker->numberBetween(0, 1),
        'status' => 'Publish'
    );
});
