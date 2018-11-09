<?php

namespace App\Services\v1;
use App\Faculty;

class FacultyService
{
    public function getFaculties()
    {
        return Faculty::all();
    }
}
