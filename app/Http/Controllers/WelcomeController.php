<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course;
use Carbon\Carbon;
use DateTimeZone;

class WelcomeController extends Controller
{

    public function index(){
       $teachers = DB::select("select * from teachers");

       $posts = DB::select("select * from courses where status = '1' order by id desc");
       $crposts = DB::select("SELECT cr_post_tables.id,cr_post_tables.crid,
cr_post_tables.crid,cr_post_tables.posttitle,cr_post_tables.postdetails,
DATE_FORMAT(cr_post_tables.updated_at, '%a %D %b %Y %h:%i %r') as updated_at,
DATE_FORMAT(cr_post_tables.updated_at, '%a %D %b %Y') as dated,
DATE_FORMAT(cr_post_tables.updated_at, ' %r') as timed,
classrepresentators.name,classrepresentators.batch,classrepresentators.picture,classrepresentators.batchlogo FROM cr_post_tables inner join classrepresentators on cr_post_tables.crid = classrepresentators.id
  WHERE cr_post_tables.id IN ( SELECT MAX(id) FROM cr_post_tables GROUP BY crid )");


      return view('FontEnd.Home.homeContent',['posts'=>$posts,'crposts'=>$crposts,'teachers'=>$teachers]);
    }

    public function studentPage($id){
        $profiles = DB::select("select * from students where id ='$id'");
        $skills = DB::select("select * from studentskill where student_id = '$id'");
        $projects = DB::select("select * from student_projects where student_id = '$id'");
        $categories = DB::select("select * from studentcategory where student_id = '$id'");
        $awards = DB::select("select * from student_awards where studentId = '$id'");
        $educations = DB::select("select * from student_educations where studentId = '$id'");
        $expertises = DB::select("select * from student_expertises where studentId = '$id'");
        $abouts = DB::select("select * from student_abouts where studentId = '$id'");
        return view('StudentProfile.Home.homeContent',
            [
                'profiles'=>$profiles,
                'skills'=>$skills,
                'projects'=>$projects,
                'categories'=>$categories,
                'awards'=>$awards,
                'educations'=>$educations,
                'expertises'=>$expertises,
                'abouts'=>$abouts
            ]);
    }

    public function teacherProfile($id){
        $teacherProfiles = DB::select("select * from teachers where id = '$id'");
        return view('FontEnd.TeacherProfile.teacherProfile',['teacherProfiles'=>$teacherProfiles]);
    }

    public function savePost(Request $request){

        $date = Carbon::now(new DateTimeZone('Asia/Dhaka'));
        $crid = 0;
        DB::table('cr_post_tables')->insert([
            'crid'=>$crid ,
            'postdetails'=>$request->postdetails,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        return redirect()->back();

    }

    public function sendMessage(Request $request){
        $date = Carbon::now(new DateTimeZone('Asia/Dhaka'));
        DB::table('student_messages')->insert([
            'studentId'=>$request->studentId,
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'created_at' => $date,
            'updated_at' => $date

        ]);

        return redirect()->back();

    }

}
