<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodLevel extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'level',
        'status',
        'title',
        'subtitle',
        'quantity'
    ];

    protected $dates = ['deleted_at']; 
}
