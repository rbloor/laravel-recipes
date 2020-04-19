<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'description' => $faker->text(200),
        'image' => 'recipe_'.$faker->numberBetween(1, 9).'.jpg',
        'calories' => $faker->numberBetween(0, 1000),
        'protein' => $faker->randomFloat(2, 0, 100),
        'carbs' => $faker->randomFloat(2, 0, 100),
        'fat' => $faker->randomFloat(2, 0, 100),
    ];
});
