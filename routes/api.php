<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
// List all recipes
Route::get('recipes', 'API\RecipeController@index');
 
// List a single recipe
Route::get('recipe/{id}', 'API\RecipeController@show');
 
// Create a new recipe
Route::post('recipe', 'API\RecipeController@store');
 
// Update a recipe
Route::put('recipe', 'API\RecipeController@store');
 
// Delete a recipe
Route::delete('recipe/{id}', 'API\RecipeController@destroy');