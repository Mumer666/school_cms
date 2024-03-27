<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassReportController extends Controller
{
    public function generateClassReport()
    {
        $classes = Classroom::all();
        return view('admin.reports.classes_report' , ['classes' => $classes]);
    }
}
