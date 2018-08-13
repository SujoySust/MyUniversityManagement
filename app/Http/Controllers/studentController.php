<?php

namespace App\Http\Controllers;

use App\Notifications\sendNotification;
use App\StudentCourseRegister;
use App\StudentProject;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use DB;
use App\Student;
use Auth;


class studentController extends Controller
{

    public function studentPost(){
        $allposts = DB::select("select student_posts.post,
DATE_FORMAT(student_posts.updated_at, '%a %D %b %Y %h:%i %r') as updated_at,
DATE_FORMAT(student_posts.updated_at, '%a %D %b %Y') as dated,
DATE_FORMAT(student_posts.updated_at, '%r') as timed,students.*
 from student_posts join students on student_posts.studentId = students.id order by id desc");

//        $crlist = DB::select("select * from classrepresentators");
        return view('FontEnd.Student.studentPost',['allposts'=>$allposts]);

//        return view('FontEnd.Student.studentPost');
    }

    public function savePost(Request $request){
        $date = Carbon::now(new DateTimeZone('Asia/Dhaka'));
        $stuid = Auth::guard('student')->user()->id;
        DB::table('student_posts')->insert([
            'studentId'=>$stuid ,
            'post'=>$request->post,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        return redirect()->back()->with('message','You have posted to the Group');

    }

    public function appointment($id){

        $stuId = Auth::guard('student')->user()->id;
        $checkReg = StudentCourseRegister::where('courseId',$id)->where('studentId',$stuId)->first();

        $courses = DB::select("select * from courses where id = '$id'");
        $studentlists = DB::select("select * from student_course_registers where courseId = '$id'");

        return view('FontEnd.Appointment.appointmentlist',['courses'=>$courses,'studentlists'=>$studentlists,'checkReg'=>$checkReg]);
    }
    public function courseRegister($id){
        $courses = DB::select("select * from courses where id = '$id'");
        return view('FontEnd.Register.register',['courses'=>$courses]);
    }
    public function saveRegister(Request $request){

       $id =$request->courseId;
      DB::table('student_course_registers')->insert([
      'courseId'=>$request->courseId,
       'studentId'=>$request->studentId,
      'courseName'=>$request->courseName,
      'studentName'=>$request->studentName,
      'registration'=>$request->registration,
      'studentEmail'=>$request->studentEmail,
      'type'=>$request->type,
      'status'=>'0'
    ]);
   // return redirect()->back();
    return redirect('student/appoint/'.$id);
    }

    public function sendNotification($id){
        $invoice = "You are close to time";
        Student::find($id)->notify(new sendNotification($invoice));
        return redirect()->back();
    }
    public function profile(){

        return view('StudentProfile.master');
    }
    public function studentList($id){
        $studentLists = DB::select("select * from students where batch like '$id'");
        return view('FontEnd.StudentList.studentList',['studentLists'=>$studentLists]);
    }

    public function studentIndex(){
//        $profiles = DB::select("select * from students where id ='$id'");
        $stuId = Auth::guard('student')->user()->id;
        $skill = DB::select("select * from studentskill where student_id ='$stuId'");
        $project = DB::select("select * from student_projects where student_id = '$stuId'");

        $messages = DB::select("select studentId,name,email,message,DATE_FORMAT(updated_at, '%a %D %b %Y') as dated,
DATE_FORMAT(updated_at, '%r') as timed from student_messages where studentId = '$stuId' order by id desc limit 4");
        return view('student.Home.homeContent',['skills'=>$skill,'projects'=>$project,'messages'=>$messages]);
    }


    public function studentProfile(){
        $stuid = Auth::guard('student')->user()->id;
        $studentProfiles = DB::select("select * from students where id = '$stuid'");
        return view('student.Profile.studentProfile',['studentProfiles'=>$studentProfiles]);
    }
    public function studentEditProfile(){

        $stuid = Auth::guard('student')->user()->id;
        $batches = DB::select("select * from batches");
        $studentdata = DB::select("select * from students where id = '$stuid'");
        return view('student.Profile.update',['studentdata'=>$studentdata,'batches'=>$batches]);
    }

    public function studentUpdateProfile(Request $request)
    {
        $imageUrl = $this->pictureUrl($request);
        $backgroundImageUrl = $this->backgroundUrl($request);


        DB::table('students')->where('id',$request->id)->update([
            'name'=>$request->name,
            'batch'=>$request->batch,
            'title'=>$request->title,
            'description'=>$request->description,
            'email'=>$request->email,
            'contract'=>$request->contract,
            'address'=>$request->address,
            'picture'=>$imageUrl,
            'background'=>$backgroundImageUrl,
        ]);

        return redirect()->back()->with('message','Profile info Update Succeessfully');

    }
    private function pictureUrl($request){
        $crId=Student::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $productImage=$request->file('picture');
        if($productImage){
            $oldImageUrl = $crId->picture;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='public/Student/images/Profile/';
            $productImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;

        }
        else{

            $imageUrl=$crId->picture;
        }
        return $imageUrl;


    }

    private function backgroundUrl($request){
        $crId=Student::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $productImage=$request->file('background');
        if($productImage){
            $oldImageUrl = $crId->background;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='public/Student/images/Profile/';
            $productImage->move($uploadPath,$imageName);
            $batchImageUrl =$uploadPath.$imageName;

        }
        else{

            $batchImageUrl=$crId->background;
        }
        return $batchImageUrl;


    }
    public function addSkill(){
        return view('student.Skill.addSkill');

    }
    public function saveSkill(Request $request){
        $stuid = $stuid = Auth::guard('student')->user()->id;
            DB::table('studentskill')->insert([
                'student_id'=>$stuid,
                'skill_title'=>$request->skill_title,
                'skill_percentage'=>$request->skill_percentage,
            ]);
            // return redirect()->back();
            return redirect()->back()->with('message','Skill info Save Succeessfully');
        }
    public function manageSkill(){
        $stuid = Auth::guard('student')->user()->id;
        $studentskills = DB::select("select * from studentskill where student_id = '$stuid'");
        return view('student.Skill.manageSkill',['studentskills'=>$studentskills]);

    }

    public function editSkill($id){
        $studentskills = DB::select("select * from studentskill where id = '$id'");
        return view('student.Skill.editSkill',['studentskills'=>$studentskills]);

    }
    public function updateSkill(Request $request){
        $studentid = $request->student_id;
        DB::select("update studentskill
                          set
                          student_id ='$request->student_id',
                          skill_title ='$request->skill_title',
                          skill_percentage ='$request->skill_percentage'
                          where id='$request->id'");
        return redirect('student/skill/manage/')->with('message','Skill info Updated Succeessfully');
    }

    public function deleteSkill($id){
        DB::select("delete from studentskill where id ='$id'");
        return redirect()->back()->with('message','Skill deleted successfully');
    }

    // Category //
    public function addCategory(){
        return view('student.Category.addCategory');

    }
    public function saveCategory(Request $request){
        $stuid = $stuid = Auth::guard('student')->user()->id;
        DB::table('studentcategory')->insert([
            'student_id'=>$stuid,
            'category_title'=>$request->category_title,
        ]);
        // return redirect()->back();
        return redirect()->back()->with('message','Category info Saved Successfully');
    }

    public function manageCategory(){
        $stuid = Auth::guard('student')->user()->id;
        $studentCategory = DB::select("select * from studentcategory where student_id = '$stuid'");
        return view('student.Category.manageCategory',['studentCategories'=>$studentCategory]);

    }
    public function editCategory($id){
        $studentCategory = DB::select("select * from studentcategory where id = '$id'");
        return view('student.Category.editCategory',['studentCategories'=>$studentCategory]);

    }
    public function updateCategory(Request $request){

        DB::select("update studentcategory
                          set
                          student_id ='$request->student_id',
                          category_title ='$request->skill_title'
                          where id='$request->id'");
        return redirect('student/category/manage/')->with('message','Category info Updated Successfully');
    }

    public function deleteCategory($id){
        DB::select("delete from studentcategory where id ='$id'");
        return redirect()->back()->with('message','Category deleted Successfully');

    }
// Awards //

    public function addAward(){
        return view('student.Award.addAward');

    }
    public function saveAward(Request $request){
        $stuid = $stuid = Auth::guard('student')->user()->id;
        DB::table('student_awards')->insert([
            'studentId'=>$stuid,
            'title'=>$request->title,
            'organization'=>$request->organization,
            'details'=>$request->details
        ]);
        // return redirect()->back();
        return redirect()->back()->with('message','Awards info Saved Successfully');
    }

    public function manageAward(){
        $stuid = Auth::guard('student')->user()->id;
        $Awards = DB::select("select * from student_awards where studentId = '$stuid'");
        return view('student.Award.manageAward',['awards'=>$Awards]);

    }
    public function editAward($id){
        $awards = DB::select("select * from student_awards where id = '$id'");
        return view('student.Award.editAward',['awards'=>$awards]);

    }
    public function updateAward(Request $request){

        DB::select("update student_awards
                          set
                          studentId ='$request->studentId',
                          title ='$request->title',
                          organization ='$request->organization',
                          details='$request->details'
                          where id='$request->id'");
        return redirect()->back()->with('message','Awards info Updated Successfully');
    }

    public function deleteAward($id){
        DB::select("delete from student_awards where id ='$id'");
        return redirect()->back()->with('message','Award deleted Successfully');

    }

    // Awards //

    // Educations //

    public function addEducation(){
        return view('student.Education.addEducation');

    }
    public function saveEducation(Request $request){
        $stuid = $stuid = Auth::guard('student')->user()->id;
        DB::table('student_educations')->insert([
            'studentId'=>$stuid,
            'type'=>$request->type,
            'institution'=>$request->institution,
            'department'=>$request->department,
            'year'=>$request->year,
        ]);
        // return redirect()->back();
        return redirect()->back()->with('message','Educations info Saved Successfully');
    }

    public function manageEducation(){
        $stuid = Auth::guard('student')->user()->id;
        $educations = DB::select("select * from student_educations where studentId = '$stuid'");
        return view('student.Education.manageEducation',['educations'=>$educations]);

    }
    public function editEducation($id){
        $education = DB::select("select * from student_educations where id = '$id'");
        return view('student.Education.editEducation',['educations'=>$education]);

    }
    public function updateEducation(Request $request){

        DB::select("update student_educations
                          set
                          studentId ='$request->studentId',
                          type ='$request->type',
                          institution ='$request->institution',
                          department='$request->department',
                          year='$request->year'
                          where id='$request->id'");
        return redirect()->back()->with('message','Education info Updated Successfully');
    }



    public function deleteEducation($id){
        DB::select("delete from student_educations where id ='$id'");
        return redirect()->back()->with('message','Education deleted Successfully');

    }
    // Educations //



    // Expertise //

    public function addExpertise(){
        return view('student.Expertise.addExpertise');

    }
    public function saveExpertise(Request $request){
        $stuid = $stuid = Auth::guard('student')->user()->id;
        DB::table('student_expertises')->insert([
            'studentId'=>$stuid,
            'title'=>$request->title,
            'year'=>$request->year,
        ]);
        // return redirect()->back();
        return redirect()->back()->with('message','Expertise info Saved Successfully');
    }

    public function manageExpertise(){
        $stuid = Auth::guard('student')->user()->id;
        $expertises = DB::select("select * from student_expertises where studentId = '$stuid'");
        return view('student.Expertise.manageExpertise',['expertises'=>$expertises]);

    }
    public function editExpertise($id){
        $expertises = DB::select("select * from student_expertises where id = '$id'");
        return view('student.Expertise.editExpertise',['expertises'=>$expertises]);

    }
    public function updateExpertise(Request $request){

        DB::select("update student_expertises
                          set
                          studentId ='$request->studentId',
                          title ='$request->title',
                          year='$request->year'
                          where id='$request->id'");
        return redirect()->back()->with('message','Expertise info Updated Successfully');
    }



    public function deleteExpertise($id){
        DB::select("delete from student_expertises where id ='$id'");
        return redirect()->back()->with('message','Expertise deleted Successfully');

    }
    // Expertise //

    // Expertise //

    public function addAbout(){
        return view('student.About.addAbout');

    }
    public function saveAbout(Request $request){
        $stuid = $stuid = Auth::guard('student')->user()->id;
        DB::table('student_abouts')->insert([
            'studentId'=>$stuid,
            'about'=>$request->about
        ]);
        // return redirect()->back();
        return redirect()->back()->with('message','About info Saved Successfully');
    }

    public function manageAbout(){
        $stuid = Auth::guard('student')->user()->id;
        $abouts = DB::select("select * from student_abouts where studentId = '$stuid'");
        return view('student.About.manageAbout',['abouts'=>$abouts]);

    }
    public function editAbout($id){
        $abouts = DB::select("select * from student_abouts where id = '$id'");
        return view('student.About.editAbout',['abouts'=>$abouts]);

    }
    public function updateAbout(Request $request){

        DB::select("update student_abouts
                          set
                          studentId ='$request->studentId',
                          about ='$request->about'
                          where id='$request->id'");
        return redirect()->back()->with('message','About info Updated Successfully');
    }



    public function deleteAbout($id){
        DB::select("delete from student_abouts where id ='$id'");
        return redirect()->back()->with('message','About deleted Successfully');

    }
    // About //

    // Project //
    public function addProject(){
        $stuid = Auth::guard('student')->user()->id;
        $category = DB::select("select * from studentcategory where student_id = '$stuid'");
        return view('student.Project.addProject',['categories'=>$category]);
    }
    public function saveProject(Request $request){

        $imageUrl = $this->projectUrl($request);


        DB::table('student_projects')->insert([
            'student_id'=>$request->student_id,
            'category_id'=>$request->category_id,
            'project_name'=>$request->project_name,
            'project_pic'=>$imageUrl,
            'project_link'=>$request->project_link,
            'project_percentage'=>$request->project_percentage,
            'technology'=>$request->technology
        ]);

        return redirect()->back()->with('message','Project saved Successfully');

    }
    private function projectUrl($request){
//
        ini_set('memory_limit','256M');
        $productImage=$request->file('picture');
        if($productImage){
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='Student/images/Project/';
            $productImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;

        }
        else{

            $imageUrl='not uploaded';
        }
        return $imageUrl;


    }
    public function manageProject(){
        $stuid = Auth::guard('student')->user()->id;
        $studentProject = DB::select("select * from student_projects where student_id = '$stuid'");
        return view('student.Project.manageProject',['studentProjects'=>$studentProject]);

    }

    public function editProject($id){
        $stuid = Auth::guard('student')->user()->id;
        $studentProject = DB::select("select * from student_projects where id = '$id'");
        $category = DB::select("select * from studentcategory where student_id = '$stuid'");
        return view('student.Project.editProject',['studentProjects'=>$studentProject,'categories'=>$category]);

    }

    public function updateProject(Request $request)
    {
        $imageUrl = $this->updateProjectUrl($request);

        DB::table('student_projects')->where('id',$request->id)->update([
            'student_id'=>$request->student_id,
            'category_id'=>$request->category_id,
            'project_name'=>$request->project_name,
            'project_pic'=>$imageUrl,
            'project_link'=>$request->project_link,
            'project_percentage'=>$request->project_percentage,
            'technology'=>$request->technology
        ]);

        return redirect()->back()->with('message','Project Updated Succeessfully');

    }
    private function updateProjectUrl($request){
        $project=StudentProject::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $productImage=$request->file('picture');
        if($productImage){
            $oldImageUrl = $project->project_pic;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='Student/images/Project/';
            $productImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;

        }
        else{

            $imageUrl=$project->project_pic;
        }
        return $imageUrl;


    }

    public function deleteProject($id){
        DB::select("delete from student_projects where id ='$id'");
        return redirect()->back()->with('message','Project deleted Successfully');

    }

    public function allMessage(){
        $stuId = Auth::guard('student')->user()->id;
        $messages = DB::select("select * from student_messages where studentId = '$stuId'");
        return view('student.Message.allMessage',['allMessages'=>$messages]);
    }


}
