<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'cover',
    ];

    protected $dates = ['deleted_at'];
}
