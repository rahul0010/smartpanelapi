<?php

namespace App\Services\v1;
use App\Student;

class StudentService
{
    public  function getStudents()
    {
        return Student::all();
    }
}
