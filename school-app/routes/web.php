<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Welcome');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Routes to controll all the working flow
Route::get('/admin/create/student' , 'App\Http\Controllers\StudentController@showCreateForm')->name('createStudent');
Route::Post('/admin/add/student' , 'App\Http\Controllers\StudentController@addStudent')->name('addStudent');
Route::get('/admin/show/students' , 'App\Http\Controllers\StudentController@showStudents')->name('viewStudents');
Route::Delete('/admin/delete/student/{id}' , 'App\Http\Controllers\StudentController@deleteStudent')->name('deleteStudent');
Route::get('/admin/edit/student/{id}' , 'App\Http\Controllers\StudentController@editStudent')->name('editStudent');
Route::Patch('/admin/update/student/{id}' , 'App\Http\Controllers\StudentController@updateStudent')->name('updateStudent');

Route::get('/admin/create/teacher' , 'App\Http\Controllers\TeacherController@createTeacherForm')->name('createTeacher');
Route::POST('/admin/add/teacher' , 'App\Http\Controllers\TeacherController@addTeacher')->name('addTeacher');
Route::get('/admin/view/teachers' , 'App\Http\Controllers\TeacherController@viewTeachers')->name('viewTeachers');
Route::Delete('/admin/delete/teacher/{id}' , 'App\Http\Controllers\TeacherController@delete')->name('deleteTeacher');
Route::get('/admin/edit/teacher/{id}' , 'App\Http\Controllers\TeacherController@editTeacher')->name('editTeacher');
Route::Patch('/admin/update/teacher/{id}' , 'App\Http\Controllers\TeacherController@updateTeacher')->name('updateTeacher');


Route::get('/admin/create/course' , 'App\Http\Controllers\CourseController@createCourse')->name('createCourse');
Route::Post('/admin/add/course' , 'App\Http\Controllers\CourseController@addCourse')->name('addCourse');
Route::get('/admin/view/courses' , 'App\Http\Controllers\CourseController@viewCourses')->name('viewCourses');
Route::Delete('/admin/delete/course/{id}' , 'App\Http\Controllers\CourseController@deleteCourse')->name('deleteCourse');
Route::get('/admin/edit/course/{id}' , 'App\Http\Controllers\CourseController@editCourse')->name('editCourse');
Route::Patch('/admin/update/course/{id}' , 'App\Http\Controllers\CourseController@updateCourse')->name('updateCourse');

Route::get('/admin/create/class' , 'App\Http\Controllers\ClassroomController@createClass')->name('createClass');
Route::POST('/admin/add/class' , 'App\Http\Controllers\ClassroomController@addClass')->name('addClass');
Route::get('/admin/view/classes' , 'App\Http\Controllers\ClassroomController@viewClasses')->name('viewClasses');
Route::Delete('/admin/delete/class/{id}' , 'App\Http\Controllers\ClassroomController@deleteClass')->name('deleteClass');
Route::get('/admin/edit/class/{id}' , 'App\Http\Controllers\ClassroomController@editClass')->name('editClass');
Route::PATCH('/admin/update/class/{id}' , 'App\Http\Controllers\ClassroomController@updateClass')->name('updateClass');


Route::get('/admin/show/enroll/students' , 'App\Http\Controllers\StudentController@showEnrollStudents')->name('showEnrollStudents');
Route::get('/admin/show/enroll/courses/for/{id}' , 'App\Http\Controllers\CourseController@showEnrollCourses')->name('showEnrollCourses');
Route::PATCH('/admin/attach/course/for/{id}' , 'App\Http\Controllers\StudentController@attachCourse')->name('attachStudentCourse');
Route::PATCH('/admin/detach/course/for/{id}' , 'App\Http\Controllers\StudentController@detachCourse')->name('detachStudentCourse');

Route::get('/admin/show/assign/teachers' , 'App\Http\Controllers\TeacherController@showAssignTeachers')->name('showAssignTeachers');
Route::get('/admin/show/assign/courses/for/{id}' , 'App\Http\Controllers\CourseController@showAssignCourses')->name('showAssignCourses');
Route::PATCH('/admin/attach/course/for/teacher/{id}' , 'App\Http\Controllers\TeacherController@attachTeacherCourse')->name('attachTeacherCourse');
Route::PATCH('/admin/detach/course/for/teacher/{id}' , 'App\Http\Controllers\TeacherController@detachTeacherCourse')->name('detachTeacherCourse');


Route::get('/admin/show/offer/classes' , 'App\Http\Controllers\ClassroomController@showOfferClasses')->name('showOfferClasses');
Route::get('/admin/show/offer/courses/for/{id}' , 'App\Http\Controllers\CourseController@showOfferCourses')->name('showOfferCourses');
Route::PATCH('/admin/offer/course/for/class/{id}' , 'App\Http\Controllers\ClassroomController@offerCourse')->name('offerCourse');
Route::PATCH('/admin/unOffer/course/for/class/{id}' , 'App\Http\Controllers\ClassroomController@unOfferCourse')->name('unOfferCourse');


Route::get('/admin/generate/courses/report' , 'App\Http\Controllers\CourseReportController@generateCourseReport')->name('generateCourseReport');
Route::get('/admin/generate/teachers/report' , 'App\Http\Controllers\TeacherReportController@generateTeacherReport')->name('generateTeachersReport');
Route::get('/admin/generate/classes/report' , 'App\Http\Controllers\ClassReportController@generateClassReport')->name('generateClassesReport');
require __DIR__.'/auth.php';
