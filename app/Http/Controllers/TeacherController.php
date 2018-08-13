<?php

namespace App\Http\Controllers;

use App\TeacherCourse;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $teacherid = Auth::guard('teacher')->user()->id;
        $mycourse = DB::select("select * from teacher_courses where teacherid = '$teacherid'");
        $mypost = DB::select("select * from courses where teacherid = '$teacherid'");
        return view('teacher.home',['mycourses'=>$mycourse,'myposts'=>$mypost]);
    }


    public function manageStudent($id){

      $studentlists = DB::select("select * from student_course_registers where courseId = '$id'");
      return view('teacher.Student.managestudent',['studentlists'=>$studentlists,'courseId'=>$id]);
    }

    public function profile(){
        $teacherId = Auth::guard('teacher')->user()->id;
        $teacherProfile = DB::select("select * from teachers where id = '$teacherId'");
        return view('teacher.Profile.viewProfile',['teacherProfiles'=>$teacherProfile]);
    }

    public function editProfile(){
        $teacherId = Auth::guard('teacher')->user()->id;
        $teacherProfile = DB::select("select * from teachers where id = '$teacherId'");
        return view('teacher.Profile.updateProfile',['teacherProfiles'=>$teacherProfile]);
    }

    public function updateProfile(Request $request)
    {
        $imageUrl = $this->imageExistsStutus($request);


        DB::table('teachers')->where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contract'=>$request->contract,
            'details'=>$request->details,
            'picture'=>$imageUrl,

        ]);

        return redirect()->back()->with('message','Profile info Update Succeessfully');

    }
    private function imageExistsStutus($request){
        $teacherId=Teacher::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $productImage=$request->file('picture');
        if($productImage){
            $oldImageUrl = $teacherId->picture;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='Teacher/profilePic/';
            $productImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;

        }
        else{

            $imageUrl=$teacherId->picture;
        }
        return $imageUrl;


    }

    // Posts //

    public function addPost($id){
        $courses = TeacherCourse::where('teacherid',$id)->get();
        return view('teacher.AddPost.addpost',['courses'=>$courses]);
    }

    public function savePost(Request $request){
        $teacherid = $request->teacherid;
        DB::table('courses')->insert([
            'courseid'=>$request->courseid,
            'teacherid'=>$request->teacherid,
            'teachername'=>$request->teachername,
            'subjectname'=>$request->subjectname,
            'subjectdetails'=>$request->subjectdetails,
            'starttime'=>$request->starttime,
            'endtime'=>$request->endtime,
            'date'=>$request->date,
            'status'=>'1',
        ]);
        // return redirect()->back();
        return redirect('teacher/post/add/'.$teacherid)->with('message','Post info Save Succeessfully');
    }

    public function managePost($id){
        // $posts = Course::where('teacherid', $id)->get();
        $posts = DB::select("select * from courses where teacherid = '$id'");
        return view('teacher.AddPost.managepost',['posts'=>$posts]);
    }

    public function editPost($id){
        $courses = DB::select("select * from courses where teacherid = '$id'");
        $posts = DB::table('courses')->where('id','=',$id)->get();
        return view('teacher.AddPost.editpost',['posts'=>$posts,'courses'=>$courses]);

    }

    public function updatePost(Request $request){
        $teacherid = $request->teacherid;
        DB::select("update courses
                          set
                          teacherid ='$request->teacherid',
                          teachername ='$request->teachername',
                          subjectname ='$request->subjectname',
                          subjectdetails ='$request->subjectdetails',
                          starttime ='$request->starttime',
                          endtime = '$request->endtime',
                          date ='$request->date',
                          status ='$request->status'
                          where id='$request->id' and teacherid='$request->teacherid'");
        return redirect('teacher/post/manage/'.$teacherid)->with('message','Post info Update Succeessfully');
    }

    public function deletePost($id,$teacherid){


        DB::select("delete from courses where id='$id' and teacherid ='$teacherid'");
        DB::select("delete from student_course_registers where courseId = '$id'");

        return redirect('teacher/post/manage/'.$teacherid)->with('message','Post Deleted Succeessfully');

    }


    // Post //

    // Course ///



    public function addCourse(){
        return view('teacher.Course.addcourse');
    }
    // public function manageCourse(){
    //   return view('Admin.Course.managecourse');
    // }

    public function saveCourse(Request $request){
        DB::table('teacher_courses')->insert([
            'teacherid'=>$request->teacherid,
            'coursename'=>$request->coursename,
            'coursedetails'=>$request->coursedetails
        ]);
        // return redirect()->back();
        return redirect('/teacher/course/add')->with('message','Course info Save Succeessfully');
    }
    public function manageCourse($id){

        // $courses = TeacherCourse::where('teacherid', $id)->get();
        $courses = DB::select("select * from teacher_courses where teacherid = '$id'");

        return view('teacher.Course.managecourse',['courses'=>$courses]);
    }

    public function editCourse($id){
        $courses = DB::select("select * from teacher_courses where id = '$id'");
        // $courses =DB::table('teacher_courses')->where('id','=',$id)->get();
        return view('teacher.Course.editcourse',['courses'=>$courses]);

    }

    public function updateCourse(Request $request){
        $teacherid = $request->teacherid;
        // DB::table('teacher_courses')->where(['id','=',$request->id],['teacherid','=',$teacherid])->update([
        //       'courseid'=>$request->courseid,
        //       'coursename'=>$request->coursename,
        //       'coursedetails'=>$request->coursedetails,
        // ]);
        DB::select("update teacher_courses
                     set
                     coursename='$request->coursename',
                     coursedetails='$request->coursedetails'
                     where id='$request->id' and teacherid='$request->teacherid'");
        return redirect('teacher/course/manage/'.$teacherid)->with('message','Course info Update Succeessfully');
    }

    public function deleteCourse($id,$teacherid){

        DB::select("delete from teacher_courses where id='$id' and teacherid ='$teacherid'");

        return redirect('teacher/course/manage/'.$teacherid)->with('message','Courseinfo Deleted Succeessfully');

    }

    public function studentApp($id){
        $result = DB::select(" update student_course_registers set status='1' where id = '$id' ");
        return redirect()->back();
    }

    public function studentAppUncheck($id){
        $result = DB::select(" update student_course_registers set status='0' where id = '$id' ");
        return redirect()->back();
    }

    // public function editcourse(){
    //   return view ('Admin.Course.managecourse');
    // }



    // Course //


}
