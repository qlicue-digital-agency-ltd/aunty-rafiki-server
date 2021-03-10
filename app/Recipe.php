<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'subtitle',
        'ingredients',
        'how_to_prepare',
        'alternative_food',
        'cover',
    ];

    protected $dates = ['deleted_at'];
}
