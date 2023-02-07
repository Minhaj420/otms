<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    public static $enroll;

    public static function newEnroll($request, $studentId, $courseId)
    {
        self::$enroll = new Enroll();
        self::$enroll->course_id         = $courseId;
        self::$enroll->student_id        = $studentId;
        self::$enroll->enroll_date       = date('Y-m-d');
        self::$enroll->enroll_timestamp  = strtotime(date('Y-m-d'));
        self::$enroll->payment_type      = $request->payment_type;
        self::$enroll->save();
        return self::$enroll;
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public static function updateEnrollStatus($request, $id)
    {
        self::$enroll = Enroll::find($id);
        if ($request->enroll_status == 'Pending')
        {
            self::$enroll->enroll_status = 'Pending';
            self::$enroll->payment_status = 'Pending';
            self::$enroll->payment_amount = 0;
        }
        elseif ($request->enroll_status == 'Processing')
        {
            self::$enroll->enroll_status = 'Processing';
            self::$enroll->payment_status = 'Processing';
            self::$enroll->payment_amount = 0;
        }
        elseif ($request->enroll_status == 'Complete')
        {
            self::$enroll->enroll_status = 'Complete';
            self::$enroll->payment_status = 'Complete';
            self::$enroll->payment_amount = self::$enroll->course->fee;
        }
        elseif ($request->enroll_status == 'Cancel')
        {
            self::$enroll->enroll_status = 'Cancel';
            self::$enroll->payment_status = 'Cancel';
            self::$enroll->payment_amount = 0;
        }
        self::$enroll->save();

    }
}
