<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function showCreateForm()
    {
        return view('admin.students.create_student');
    }

    public function addStudent(Request $request)
    {
        $inputs = $request->validate([
            'Reg_No' => 'required',
            'name' => 'required',
            'birth' => 'required'
        ]);

        $result = Student::create($inputs);
        return redirect()->route('viewStudents');
    }

    public function showStudents()
    {
        $students = Student::all();
        return view('admin.students.view_student' , ['students'=> $students]);
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }
    public function editStudent($id)
    {
        $student = Student::find($id);
        return view('admin.students.update_student' , ['student' => $student]);
    }

    public function updateStudent($id)
    {
        $student = Student::find($id);
        $inputs = \request()->validate([
            'Reg_No' => 'required',
            'name' => 'required',
            'birth' => 'required'
        ]);

        $student->Reg_No = $inputs['Reg_No'];
        $student->name = $inputs['name'];
        $student->birth = $inputs['birth'];

        $student->save();
        return redirect()->route('viewStudents');

    }
    public function showEnrollStudents()
    {
        $students = Student::all();
        return view('admin.tasks.show_enroll_students' , ['students' => $students]);
    }

    public function attachCourse($id)
    {
        $student = Student::find($id);
        $course = Course::find(\request('course_id'));
        $student->courses()->attach($course);
        return redirect()->back();
    }

    public function detachCourse($id)
    {
        $student = Student::find($id);
        $course = Course::find(\request('course_id'));
        $student->courses()->detach($course);
        return redirect()->back();
    }
}
