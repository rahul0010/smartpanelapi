<?php

namespace App\Services\v1;
use App\Salary;

class SalaryService
{
    public function getSalaries()
    {
        return Salary::all();
    }
}
