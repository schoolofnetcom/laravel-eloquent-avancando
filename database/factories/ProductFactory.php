<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => implode(' ', $faker->paragraphs),
        'deleted_at' => null,
        'activated' => rand(0, 1)
    ];
});
