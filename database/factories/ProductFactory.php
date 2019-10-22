<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'sub_title' => $faker->title,
        'slug' => $faker->slug,
        'category_id' => factory(App\Models\Category::class)->create(),
        'price' => $faker->randomFloat(),
        'sale_price' => $faker->randomFloat(),
        'product_photo' => 'https://picsum.photos/200/300',
        'description' => $faker->text,
        'weight' => $faker->randomFloat(),
        'stock' => $faker->numberBetween(0, 500),
        'featured' => $faker->numberBetween(0, 1),
        'status' => 'Publish'
    ];
});