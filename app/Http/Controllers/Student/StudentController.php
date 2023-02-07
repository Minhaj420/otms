<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{
    public function allCourse()
    {
        return view('student.dashboard.course.index', [
            'enrolls' => Enroll::where('student_id', Session::get('student_id'))->orderBy('id', 'desc')->get(),
        ]);
    }
}
