<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'parent_id' => factory(App\Models\Category::class)->create(),
        'banner' => 'https://picsum.photos/1000/300'
    ];
});
