<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tracker extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'media',
        'type',
        'day',
        'week'
    ];

    protected $dates = ['deleted_at'];
}
