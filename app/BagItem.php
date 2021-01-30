<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BagItem extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'owner',
        'type',
        'is_packed',
        'uid'
    ];

    protected $dates = ['deleted_at'];
}
