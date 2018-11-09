<?php

namespace App\Services\v1;
use App\Course;

class CourseService
{
    public function getCourses()
    {
        return Course::all();
    }
}
