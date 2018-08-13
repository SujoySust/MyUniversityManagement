<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    // Manage Cr
    public function manageCr(){
        $crlist = DB::select("select * from classrepresentators order by id desc");
        return view('admin.ClassRepresentator.manageCr',['crlists'=>$crlist]);
    }

    public function blockCr($id){
        DB::select("update classrepresentators set status = 0 where id ='$id'");
        Return redirect()->back();

    }
    public function approveCr($id){
        DB::select("update classrepresentators set status = 1 where id = '$id'");
        Return redirect()->back();

    }
    public function deleteCr($id){
        DB::select("delete from classrepresentators where id = '$id'");
        DB::select("delete from cr_post_tables where crid ='$id'");
        Return redirect()->back();

    }

    // Manage Cr

    // Manage Teacher
    public function manageTeacher(){
        $teacherlist = DB::select("select * from teachers order by id desc");
        return view('admin.Teacher.manageTeacher',['teacherlists'=>$teacherlist]);
    }

    public function blockTeacher($id){
        DB::select("update teachers set status = 0 where id ='$id'");
        Return redirect()->back();

    }
    public function approveTeacher($id){
        DB::select("update teachers set status = 1 where id = '$id'");
        Return redirect()->back();

    }
    public function deleteTeacher($id){
        DB::select("delete from teachers where id = '$id'");
        DB::select("delete from teacher_courses where teacherid ='$id'");
        DB::select("delete from courses where teacherid ='$id'");
        Return redirect()->back();

    }

    // Manage Teacher



    /// Batch //
    public function addBatch(){
        return view('admin.Batch.addBatch');

    }
    public function saveBatch(Request $request){

        $this->validate($request,[
            'name' => 'required|unique:batches'
        ]);

        DB::table('batches')->insert([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);
        // return redirect()->back();
        return redirect()->back()->with('message','Batch info Saved Successfully');
    }

    public function manageBatch(){
        $batch = DB::select("select * from batches");
        return view('admin.Batch.manageBatch',['batches'=>$batch]);
    }
    public function editBatch($id){
        $batch = DB::select("select * from batches where id = '$id'");
        return view('admin.Batch.editBatch',['batches'=>$batch]);

    }
    public function updateBatch(Request $request){

        DB::select("update batches
                          set
                          name ='$request->name',
                          status ='$request->status'
                          where id='$request->id'");
        return redirect('admin/batch/manage/')->with('message','Batch  Updated Successfully');
    }

    public function deleteBatch($id){
        DB::select("delete from batches where id ='$id'");
        return redirect()->back()->with('message','Batch deleted Successfully');

    }


}
