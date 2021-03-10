<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pregnacy extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'conception_date',
        'due_date',

    ];

    protected $dates = ['deleted_at'];

    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }
}
