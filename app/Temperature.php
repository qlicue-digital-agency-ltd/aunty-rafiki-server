<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Temperature extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'uid',
        'reading',
        'date',
    ];

    protected $dates = ['deleted_at'];
}
