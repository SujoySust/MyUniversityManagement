<?php

namespace App\Http\Controllers;

use App\Notifications\SendEmail;
use App\Student;
use Illuminate\Http\Request;

use DB;
class EmailController extends Controller
{
    public function sendNotification(Request $request){
        $courseId = $request->courseId;
        $message = $request->message;
        $registerlists = DB::select("select * from student_course_registers where courseId = '$courseId'");

        foreach ($registerlists as $registerlist){

            $studentName = $registerlist->studentName;
            $courseName = $registerlist->courseName;
            $user = Student::find($registerlist->studentId);
            $user->notify(new SendEmail($message,$studentName,$courseName));
        }

        return redirect()->back()->with('message','Message Sent Successfully');

    }
}
