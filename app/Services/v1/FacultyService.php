<?php

namespace App\Services\v1;
use App\Faculty;

class FacultyService
{
    public function getFaculties()
    {
        return $this->filterFaculties(Faculty::all());
    }

    public function getFaculty($faculty_id)
    {
        return $this->filterFaculty(Faculty::where('id',$faculty_id)->get());
    }

    protected function filterFaculties($faculties)
    {
        $data = [];
        foreach($faculties as $faculty)
        {
            $entry = [
                'id' => $faculty->id,
                'first_name' => $faculty->first_name,
                'middle_name' => $faculty->middle_name,
                'last_name' => $faculty->last_name,
                'photo' => $faculty->photo,
                'designation' => $faculty->designation,
                'href' => route('faculties.show',['id' => $faculty->id])
            ];
            $data[] = $entry;
        }
        return $data;
    }

    protected function filterFaculty($faculties)
    {
        $data = [];
        foreach($faculties as $faculty)
        {
            $entry = [
                'id' => $faculty->id,
                'first_name' => $faculty->first_name,
                'middle_name' => $faculty->middle_name,
                'last_name' => $faculty->last_name,
                'photo' => $faculty->photo,
                'designation' => $faculty->designation,
                'date_of_birth' => $faculty->date_of_birth,
                'phone' => $faculty->phone,
                'email' => $faculty->email,
                'address' => $faculty->address,
                'aadhar_no' => $faculty->aadhar_no,
                'joining_date' => $faculty->joining_date,
                'salary' => $faculty->salary,
            ];
            $data[] = $entry;
        }
        return $data;
    }
}
