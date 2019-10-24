<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    // $categoryIDs = APP\Models\Category::all()->random();
    
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'parent_id' => 0,
        // 'parent_id' => $faker->randomElement($categoryIDs),
        // 'parent_id' => factory(App\Models\Category::class)->create(),
        // 'parent_id' => function() { return App\Models\Category::all()->random(); },
        'banner' => 'https://picsum.photos/1000/300'
    ];
});
