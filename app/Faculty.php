<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone',
        'aadhar_no',
        'photo',
        'address',
        'joining_date',
        'designation',
        'salary'
    ];

    public function faculty_attendence()
    {
        $this->hasMany('App\FacultyAttendence');
    }

    public function salary()
    {
        $this->hasMany('App\Salary');
    }
}
