<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mother extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'uid',
       
    ];

    protected $dates = ['deleted_at'];

    public function pregnancies()
    {
        return $this->hasMany(Pregnacy::class)->orderby('id', 'desc');
    }
}
