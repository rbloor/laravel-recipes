<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Http\Resources\Recipe as RecipeResource;
use App\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the recipes
        $recipes = Recipe::paginate(8);
        
        // Return collection of recipes as a resource
        return RecipeResource::collection($recipes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  Create a new recipe
        $recipe = new Recipe;

        // Fill recipe with post data
        $recipe->fill($request->all());
        
        // Return newly added recipe as a resource
        if ($recipe->save()) {
            return new RecipeResource($recipe);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a single recipe
        $recipe = Recipe::findOrFail($id);
        
        // Return a single recipe as a resource
        return new RecipeResource($recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  Allow for recipe update
        $recipe = Recipe::findOrFail($request->id);

        // Fill recipe with post data
        $recipe->fill($request->all());

        // Return updated recipe as a resource
        if ($recipe->save()) {
            return new RecipeResource($recipe);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get the recipe
        $recipe = Recipe::findOrFail($id);
        
        //  Delete the recipe, return as confirmation
        if ($recipe->delete()) {
            return new RecipeResource($recipe);
        }
    }
}
