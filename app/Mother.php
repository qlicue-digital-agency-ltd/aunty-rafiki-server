<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mother extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'uid',
        'conception_date'

    ];

    protected $dates = ['deleted_at'];
}
