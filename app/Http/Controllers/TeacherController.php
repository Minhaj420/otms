<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teachers, $teacher;

    public function index()
    {
        return view('admin.teacher.index');
    }
    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect('/Add/teacher')->with('message', 'Teacher Info Save Successfully');
    }

    public function manage()
    {
        $this->teachers = Teacher::orderBy('id', 'desc')->get();
        return view('admin.teacher.manage', ['teachers' => $this->teachers]);
    }
    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit', ['teacher' => $this->teacher]);
    }
    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('/manage/Teacher')->with('message', 'Updated Successfully');
    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/manage/Teacher')->with('message', 'Deleted');

    }

}
