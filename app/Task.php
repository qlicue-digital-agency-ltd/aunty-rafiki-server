<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'category',
        'date',
        'time',
        'stage',
        'reminder'
    ];


    protected $casts = [
        'reminder' => 'boolean',
    ];
    protected $dates = ['deleted_at'];
}
