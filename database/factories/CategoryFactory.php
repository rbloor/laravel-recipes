<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'description' => $faker->text(200),
        'image' => 'category_'.$faker->numberBetween(1, 9).'.jpg'
    ];
});
