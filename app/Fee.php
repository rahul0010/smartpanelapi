<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'course_id',
        'student_id',
        'total_fee',
        'installment_amount'
    ];

    public function student()
    {
        $this->belongsToMany('App\Student');
    }

    public function course()
    {
        $this->belongsTo('App\Course');
    }
}
