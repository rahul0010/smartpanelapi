<?php

namespace App\Services\v1;
use App\Student;
use App\Course;
use App\Fee;
use App\Batch;
use App\Faculty;

class StudentService
{
    public  function getStudents()
    {
        // return Student::paginate(15);
        $data = [
            'prev_page_url' =>Student::paginate(15)->previousPageUrl(),
            'data' => $this->filterStudents(Student::paginate(15)),
            'next_page_url'=>Student::paginate(15)->nextPageUrl()
        ];
        return $data;
        // return $this->filterStudents(Student::all());
    }

    public function getStudent($student_id)
    {
        return $this->filterStudent(Student::where('id', $student_id)->get());
    }

    public function addStudent($req)
    {
        $student = new Student();
        $student->first_name = $req->input('first_name');
        $student->middle_name = $req->input('middle_name');
        $student->last_name  = $req->input('last_name');
        $student->date_of_birth = date('Y-m-d', $req->input('date_of_birth'));
        if($req->hasFile('photo'))
        {
            //Get filename with extension
            $filename_with_extension = $req->file('photo')->getClientOriginalImage();
            //Get file name
            $filename = pathinfo($filename_with_extension, PATHINFO_FILENAME);
            //get file extension
            $exsention = $req->file('photo')->getClientOriginalExtention();
            //File name to store
            $filename_to_store = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $req->file('photo')->storeAd('public/photos',$filename_to_store);
        }
        else
        {
            $filename_to_store = 'noimage.jpg';
        }
        $student->photo = $filename_to_store;
        $student->phone = $req->input('phone');
        $student->email = $req->input('email');
        $student ->address = $req->input('address');
        $student->aadhar_no = $req->input('aadhar_no');
        $student->date_of_admission = date('Y-m-d');
        $student->batch_id = $req->input('batch_id');
        $student->faculty_id = $req->input('faculty_id');
        $student->save();

        return dd($student->id);
    }

    protected function filterStudents($students)
    {
        $data = [];
        foreach($students as $student)
        {
            $entry = [
                'id' => $student->id,
                'first_name' => $student->first_name,
                'middle_name' => $student->middle_name,
                'last_name' => $student->last_name,
                'photo' => $student->photo,
                'date_of_birth' => $student->date_of_birth,
                'course_name' =>  Course::where('id',(Fee::where('student_id',$student->id)->value('course_id')))->value('name'),
                'href' => route('students.show', ['id' => $student->id])
            ];

            $data[] = $entry;
        }
        return $data;
    }

    protected function filterStudent($students)
    {
        $faculty = new FacultyService();
        $data=[];
        foreach($students as $student)
        {
            $entry = [
                'id' => $student->id,
                'first_name' => $student->first_name,
                'middle_name' => $student->middle_name,
                'last_name' => $student->last_name,
                'photo' => $student->photo,
                'date_of_birth' => $student->date_of_birth,
                'course_name' =>  Course::where('id',(Fee::where('student_id',$student->id)->value('course_id')))->value('name'),
                'phone' => $student->phone,
                'email' => $student->email,
                'address' => $student->address,
                'aadhar_no' => $student->aadhar_no,
                'batch' => Batch::where('id', $student->batch_id)->value('timing'),
                'admission_date' => $student->admission_date,
                'faculty' => Faculty::where('id',$student->faculty_id)->value('first_name').' '.Faculty::where('id',$student->faculty_id)->value('middle_name').' '.Faculty::where('id',$student->faculty_id)->value('last_name')
            ];

            $data[] = $entry;
        }
        return $data;
    }
}
