<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'total_fee'
    ];

    public function students()
    {
        $this->belongsToMany('App\Student');
    }

    public function course_details()
    {
        $this->hasMany('App\CourseDetail');
    }
}
