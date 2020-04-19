<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image'
    ];

    public function recipe()
    {
        return $this->belongsTo('App\Recipe', 'recipe_id');
    }
}
