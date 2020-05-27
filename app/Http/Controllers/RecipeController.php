<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Category;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        $categories = Category::all();
        
        return view('recipe.index', compact('recipes', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->image = 'hoisin-chicken-plum-stir-fry.jpg';
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Display the a random resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRandom()
    {
        $recipe = Recipe::inRandomOrder()->limit(1)->first();
        return redirect()->route('recipe.show', ['recipe' => $recipe->id]);
    }

}
