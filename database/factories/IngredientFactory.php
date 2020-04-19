<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'description' => $faker->text(200),
        'image' => 'ingredient_'.$faker->numberBetween(1, 9).'.jpg'
    ];
});
