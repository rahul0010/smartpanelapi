<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    protected $fillable = [
        'day',
        'topic'
    ];

    public function course()
    {
        $this->belongsTo('App\Course');
    }
}
