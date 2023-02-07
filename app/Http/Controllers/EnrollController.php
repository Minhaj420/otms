<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;
use Mail;

class EnrollController extends Controller
{
    private $student, $enroll, $enrollExist, $emailData;
    public function index($id)
    {
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }

        return view('website.enroll.index', ['id' => $id, 'student' => $this->student]);
    }
    public function newEnroll(Request $request, $id)
    {
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        else
        {
        $this->validate($request, [
            'name' => 'required|regex:/^[a-zA-Z- ]+$/',
            'email' => 'required|unique:students,email',
            'mobile' => 'required|unique:students,mobile',
        ],[
            'name.require' => 'vai name na dile guli kormu',
            'name.regex' => 'okkore kuittalbam',
            'email.require' => 'Besi jhamela korle ekdom sill maira dibo',
        ]);

        $this->student = Student::newStudent($request);

        }

        $this->enrollExist = Enroll::where(['student_id' => $this->student->id, 'course_id' => $id])->first();
        if ($this->enrollExist)
        {
            return redirect()->back()->with('message', 'Sorry..you already enroll this course');
        }

        $this->enroll = Enroll::newEnroll($request, $this->student->id, $id);
        Session::put('student_id', $this->student->id);
        Session::put('student_name', $this->student->name);



        $this->emailData = [
            'name'      => $this->student->name,
            'login_url' => 'http://127.0.0.1:8000/login-registration',
            'email'     => $this->student->email,
            'password'  => $this->student->mobile,
        ];
        Mail::to($this->student->email)->send(new EnrollConfirmationMail($this->emailData));



        return redirect('/training-complete-enroll/'.$this->enroll->id);
    }
    public function completeEnroll($id)
    {
        return view('website.enroll.complete-enroll', ['enroll' => Enroll::find($id)]);
    }
}
