<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function createClass()
    {
        return view('admin.classrooms.create_class');
    }

    public function addClass(Request $request)
    {
        $inputs = $request->validate([
            'className' => 'required'
        ]);

        $result = Classroom::create($inputs);
        return redirect()->route('viewClasses');
    }

    public function viewClasses()
    {
        $classes = Classroom::all();
        return view('admin.classrooms.view_classes' , ['classes' => $classes]);
    }

    public function deleteClass($id)
    {
        $class = Classroom::find($id);
        $class->delete();
        return redirect()->back();
    }

    public function editClass($id)
    {
        $class = Classroom::find($id);
        return view('admin.classrooms.edit_class' , ['class' => $class]);
    }

    public function updateClass($id)
    {
        $class = Classroom::find($id);
        $inputs = \request()->validate([
            'className' => 'required'
        ]);

        $class->className = $inputs['className'];
        $class->save();
        return redirect()->route('viewClasses');
    }
    public function showOfferClasses()
    {
        $classes = Classroom::all();
        return view('admin.tasks.show_offer_classes' , ['classes' => $classes]);
    }
    public function offerCourse($id)
    {
        $class = Classroom::find($id);
        $course = Course::find(\request('course_id'));
        $class->courses()->attach($course);
        return redirect()->back();
    }
    public function unOfferCourse($id)
    {
        $class = Classroom::find($id);
        $course = Course::find(\request('course_id'));
        $class->courses()->detach($course);
        return redirect()->back();
    }
}
