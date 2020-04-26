<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Recipe::class, 100)->create()->each(function($recipe) {
            $recipe->categories()->attach(
                Arr::random(App\Category::pluck('id')->toArray(), 2)
            );

            $ingredientIDs = Arr::random(App\Ingredient::pluck('id')->toArray(), 5);
            $units = ['gram', 'ml'];
            foreach($ingredientIDs as $ingredientID) {
                $recipe->ingredients()->attach($ingredientID, ['unit' => Arr::random($units), 'quantity' => rand(1, 500)]);
            }
        });
    }
}
