<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'description', 
        'cooking_time', 
        'rating',
        'level',
        'image',
        'calories',
        'fat',
        'saturated_fat',
        'carbs',
        'sugar',
        'protein',
        'salt'
    ];

    public function steps()
    {
        return $this->hasMany('App\Step', 'recipe_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient')->withPivot('unit', 'quantity')->withTimestamps();
    }
}
