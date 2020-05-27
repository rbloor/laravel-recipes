<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('recipe/random', 'RecipeController@showRandom')->name('recipe.random');
Route::resource('recipe', 'RecipeController')->only([
    'index', 'show'
]);