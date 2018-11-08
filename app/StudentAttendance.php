<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    protected $fillable = [
        'student_id',
        'date',
        'lecture_no',
        'time_marked'
    ];

    public function student()
    {
        $this->belongsTo('App\Student');
    }
}
