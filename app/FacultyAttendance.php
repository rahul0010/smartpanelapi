<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyAttendance extends Model
{
    protected $fillable = [
        'faculty_id',
        'date',
        'time_marked'
    ];

    public function faculty()
    {
        $this->belongsTo('App\Faculty');
    }
}
