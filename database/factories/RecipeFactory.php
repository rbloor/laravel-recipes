<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'description' => $faker->text(200),
        'cooking_time' => $faker->numberBetween(10, 30),
        'image' => $faker->numberBetween(1, 9),
        'rating' => $faker->numberBetween(1, 5),
        'level' => $faker->numberBetween(1, 3),
        'calories' => $faker->numberBetween(0, 1000),
        'fat' => $faker->randomFloat(2, 0, 100),
        'saturated_fat' => $faker->randomFloat(2, 0, 100),
        'carbs' => $faker->randomFloat(2, 0, 100),
        'sugar' => $faker->randomFloat(2, 0, 100),
        'protein' => $faker->randomFloat(2, 0, 100),
        'salt' => $faker->randomFloat(2, 0, 100),
    ];
});
