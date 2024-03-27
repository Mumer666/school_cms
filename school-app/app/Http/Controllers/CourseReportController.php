<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseReportController extends Controller
{

    public function generateCourseReport()
    {
        $courses = DB::table('courses')
            ->join('course_teacher' , 'courses.id' , '=' , 'course_teacher.course_id')
            ->join('teachers' , 'teachers.id' , '=' , 'course_teacher.teacher_id')
            ->join('classroom_course' , 'classroom_course.course_id' , '=' , 'course_teacher.course_id')
            ->join('classrooms' , 'classrooms.id' , '=' , 'classroom_course.classroom_id')
            ->join('course_student' , 'course_student.course_id' , '=' , 'course_teacher.course_id')
            ->join('students' , 'students.id' , '=' , 'course_student.student_id')
            ->select('courses.courseCode' , 'teachers.teacherName' , 'classrooms.className' , DB::raw('COUNT(courses.courseCode) as noOfStudents'))
            ->groupBy('courses.courseCode' , 'teachers.teacherName' , 'classrooms.className')
            ->get();

        return view('admin.reports.courses_report' , ['courses' => $courses]);
    }
}
