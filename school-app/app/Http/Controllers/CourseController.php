<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function createCourse()
    {
        return view('admin.courses.create_course');
    }

    public function addCourse(Request $request)
    {
        $inputs = $request->validate([
            'courseCode' => 'required',
            'creditHours' => 'required'
        ]);

        $result = Course::create($inputs);
        return redirect()->route('viewCourses');
    }

    public function viewCourses()
    {
        $courses = Course::all();
        return view('admin.courses.view_courses' , ['courses'=>$courses]);
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back();
    }
    public function editCourse($id)
    {
        $course = Course::find($id);
        return view('admin.courses.edit_course' , ['course' => $course]);
    }

    public function updateCourse($id)
    {
        $course = Course::find($id);

        $inputs = \request()->validate([
            'courseCode' => 'required',
            'creditHours' => 'required'
        ]);

        $course->courseCode = $inputs['courseCode'];
        $course->creditHours = $inputs['creditHours'];
        $course->save();
        return redirect()->route('viewCourses');
    }

    public function showEnrollCourses($id)
    {
        $student = Student::find($id);
        $courses = Course::all();
        return view('admin.tasks.show_enroll_courses' , ['student'=>$student , 'courses'=>$courses]);
    }
    public function showAssignCourses($id)
    {
        $teacher = Teacher::find($id);
        $courses = Course::all();
        return view('admin.tasks.show_assign_courses' , ['teacher'=>$teacher , 'courses'=>$courses]);
    }
    public function showOfferCourses($id)
    {
        $class = Classroom::find($id);
        $courses = Course::all();
        return view('admin.tasks.show_offer_courses' , ['class' => $class , 'courses'=>$courses]);
    }
}
