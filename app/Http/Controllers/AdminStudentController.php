<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function index()
    {
        return view('admin.student.index', ['students' => Student::orderBy('id', 'desc')->get()]);
    }
    public function detail($id)
    {
        return view('admin.student.detail', ['student' => Student::find($id)]);
    }
    public function updateStatus($id)
    {
        return redirect()->back()->with('message', Student::updateStatus($id));
    }
}
