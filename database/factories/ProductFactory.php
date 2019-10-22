<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'sub_title' => $faker->title,
        'slug' => $faker->slug,
        'category_id' => factory(App\Models\Category::class)->create(),

        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});