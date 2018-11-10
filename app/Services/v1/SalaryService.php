<?php

namespace App\Services\v1;
use App\Salary;

class SalaryService
{
    public function getSalaries()
    {
        return Salary::all();
    }

    protected function filterSalaries($salaries)
    {
        $data = [];
        foreach($salaries as $salary)
        {
            $entry = [
                'id' => $salary->id,
                'faculty_id' => $salary->faculty_id,
                'payment_date' => $salary->payment_date,
                'paid_date' => $salary->paid_date
            ];

            $data[] = $entry;
        }
        return $data;
    }
}
