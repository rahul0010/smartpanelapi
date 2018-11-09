<?php

namespace App\Services\v1;
use App\Fee;

class FeeService
{
    public function getFees()
    {
        return Fee::all();
    }
}
