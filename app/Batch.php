<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'timings'
    ];

    public function students()
    {
        $this->hasMany('App\Student');
    }
}
