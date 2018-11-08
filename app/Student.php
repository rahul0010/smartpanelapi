<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'email',
        'address',
        'phone',
        'aadhar_no',
        'photo',
        'batch_id',
        'faculty_id',
        'admission_date'
    ];

    public function batch()
    {
        $this->belongsTo('App\Batch');
    }

    public function faculty()
    {
        $this->belongsTo('App\Faculty');
    }
}
