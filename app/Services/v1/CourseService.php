<?php

namespace App\Services\v1;
use App\Course;
use App\CourseDetail;

class CourseService
{
    public function getCourses()
    {
        return $this->filterCourses(Course::all());
    }
    public function getCourse($course_id)
    {
        return $this->filterCourse(CourseDetail::where('course_id',$course_id)->orderBy('day')->get());
    }

    protected function filterCourses($courses)
    {
        $data = [];
        foreach($courses as $course)
        {
            $entry = [
                'id' => $course->id,
                'name' => $course->name,
                'duration' => $course->duration,
                'total_fee' => $course->total_fee,
                'href' => route('courses.show',['course_id' => $course->id])
            ];
            $data[] = $entry;
        }
        return $data;
    }

    protected function filterCourse($courses)
    {
        $data = [];
        foreach($courses as $course)
        {
            $entry = [
                'day' => $course->day,
                'topic' => $course->topic,
            ];
            $data[] = $entry;
        }
        return $data;
    }
}
