<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = [
        'faculty_id',
        'salary',
        'payment_date',
        'paid_date'
    ];

    public function faculty()
    {
        $this->belonsTo('App\Faculty');
    }
}
