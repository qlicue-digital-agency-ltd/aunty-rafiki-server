<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeline extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'time',
        'body',
        'image'
    ];

    protected $dates = ['deleted_at'];
}
