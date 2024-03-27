<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherReportController extends Controller
{
    public function generateTeacherReport()
    {
        $teachers = Teacher::all();
        $students = DB::table('teachers')
            ->join('course_teacher' , 'course_teacher.teacher_id' , '=' , 'teachers.id')
            ->join('course_student' , 'course_student.course_id' , '=' , 'course_teacher.course_id')
            ->select('teachers.teacherName' , DB::raw('COUNT(teachers.teacherName) as totalStudents'))
            ->groupBy('teachers.teacherName')
            ->get();

        return view('admin.reports.teachers_report' , ['students'=>$students , 'teachers'=>$teachers]);
    }
}
