<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Step;
use Faker\Generator as Faker;

$factory->define(Step::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'description' => $faker->text(200),
        'image' => 'step_'.$faker->numberBetween(1, 9).'.jpg',
        'recipe_id' => $faker->randomElement(App\Recipe::pluck('id')->toArray()),
    ];
});
