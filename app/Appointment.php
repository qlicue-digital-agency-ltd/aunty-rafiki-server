<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'profession',
        'date',
        'time',
        'sync_to_calendar',
        'additional_notes'
    ];


    protected $casts = [
        'sync_to_calendar' => 'boolean',
    ];
    protected $dates = ['deleted_at'];
}
