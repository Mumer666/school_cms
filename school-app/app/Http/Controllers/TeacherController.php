<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function createTeacherForm()
    {
        return view('admin.teachers.create_teacher');
    }

    public function addTeacher(Request $request)
    {
        $inputs = $request->validate([
            'teacherName' => 'required',
            'designation' => 'required'
        ]);

        $result = Teacher::create($inputs);

        return redirect()->route('viewTeachers');
    }

    public function viewTeachers()
    {
        $teachers = Teacher::all();

        return view('admin.teachers.view_teachers' , ['teachers'=>$teachers]);
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->back();
    }

    public function editTeacher($id)
    {
        $teacher = Teacher::find($id);
        return view('admin.teachers.edit_teacher' , ['teacher'=>$teacher]);
    }
    public function updateTeacher($id)
    {
        $teacher = Teacher::find($id);
        $inputs = \request()->validate([
           'teacherName' => 'required',
           'designation' => 'required'
        ]);

        $teacher->teacherName = $inputs['teacherName'];
        $teacher->designation = $inputs['designation'];
        $teacher->save();
        return redirect()->route('viewTeachers');
    }
    public function showAssignTeachers()
    {
        $teachers = Teacher::all();
        return view('admin.tasks.show_assign_teachers' , ['teachers' => $teachers]);
    }
    public function attachTeacherCourse($id)
    {
        $teacher = Teacher::find($id);
        $course = Course::find(\request('course_id'));
        $teacher->courses()->attach($course);
        return redirect()->back();
    }

    public function detachTeacherCourse($id)
    {
        $teacher = Teacher::find($id);
        $course = Course::find(\request('course_id'));
        $teacher->courses()->detach($course);
        return redirect()->back();
    }
}
