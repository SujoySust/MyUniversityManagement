<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Classrepresentator;
use DB;
use Auth;

class crController extends Controller
{
    public function crIndex(){
        $crid = Auth::guard('classrepresentator')->user()->id;
        $status = Auth::guard('classrepresentator')->user()->status;
        $postlist = DB::select("select posttitle,postdetails,DATE_FORMAT(created_at, '%a %D %b %Y %h:%i %r') as created_at,DATE_FORMAT(updated_at, '%a %D %b %Y %h:%i %r') as updated_at from cr_post_tables where crid = '$crid' order by id desc");
        return view('classrepresentator.home',['postlists'=>$postlist]);
    }
    public function crProfile(){
        $crid = Auth::guard('classrepresentator')->user()->id;
        $crprofiles = DB::select("select * from classrepresentators where id = '$crid'");
        return view('classrepresentator.Profile.profile',['crprofiles'=>$crprofiles]);
    }
    public function crEditProfile(){

        $crid = Auth::guard('classrepresentator')->user()->id;
        $crdata = DB::select("select * from classrepresentators where id = '$crid'");
        $batches = DB::select("select * from batches");
        return view('classrepresentator.update.update',['crdata'=>$crdata,'batches'=>$batches]);
    }
    public function crUpdateProfile(Request $request)
    {
        $imageUrl = $this->imageExistsStutus($request);
        $batchImageUrl = $this->imageBatchLogo($request);


        DB::table('classrepresentators')->where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contract'=>$request->contract,
            'batch'=>$request->batch,
            'picture'=>$imageUrl,
            'batchlogo'=>$batchImageUrl,
        ]);

        return redirect('classrepresentator/profile/edit')->with('message','Profile info Update Succeessfully');

    }
    private function imageExistsStutus($request){
        $crId=Classrepresentator::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $productImage=$request->file('picture');
        if($productImage){
            $oldImageUrl = $crId->picture;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='public/crProfilepic/';
            $productImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;

        }
        else{

            $imageUrl=$crId->picture;
        }
        return $imageUrl;


    }

    private function imageBatchLogo($request){
        $crId=Classrepresentator::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $productImage=$request->file('batchlogo');
        if($productImage){
            $oldImageUrl = $crId->batchlogo;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='public/batchLogo/';
            $productImage->move($uploadPath,$imageName);
            $batchImageUrl =$uploadPath.$imageName;

        }
        else{

            $batchImageUrl=$crId->batchlogo;
        }
        return $batchImageUrl;

    }
    public function crChangePassword(){
        return view('classrepresentator.Password.changePassword');
    }

    public function crUpdatePassword(Request $request){
        $crid = Auth::guard('classrepresentator')->user()->id;
        $pass = bcrypt($request['password']);
        DB::select("update classrepresentators 
                               set 
                               password = '$pass'
                               where id ='$crid'");
        return redirect()->back()->with('message','Password Changed Successfully');
    }


    /// Posts //


    public function crAddPost(){
        return view('classrepresentator.Post.addpost');
    }

    public function crSavePost(Request $request){
        $date = Carbon::now(new DateTimeZone('Asia/Dhaka'));
        $crid = Auth::guard('classrepresentator')->user()->id;
        DB::table('cr_post_tables')->insert([
            'crid'=>$crid ,
            'posttitle'=>$request->posttitle,
            'postdetails'=>$request->postdetails,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        return redirect()->back()->with('message','You have posted to the Group');
    }
    public function crManagePost(){
        $crid = Auth::guard('classrepresentator')->user()->id;
        $postlist = DB::select("select * from cr_post_tables where crid = '$crid'");
        return view('classrepresentator.Post.managepost',['postlists'=>$postlist]);
    }

    public function crEditPost($id){
        $postlist = DB::select("select * from cr_post_tables where id = '$id'");
        return view('classrepresentator.Post.editpost',['postlists'=>$postlist]);
    }

    public function crUpdatePost(Request $request)
    {
        $id = $request->id;
        $date = Carbon::now(new DateTimeZone('Asia/Dhaka'));
        DB::select("update cr_post_tables
                          set
                          posttitle ='$request->posttitle',
                          postdetails = '$request->postdetails',
                          updated_at = '$date'
                          where id='$request->id'");
        return redirect('classrepresentator/post/manage')->with('message','Post Updated Succeessfully');
    }

    public function crDeletePost($id){

        DB::select("delete from cr_post_tables where id='$id'");

        return redirect()->back()->with('message','Post Deleted Succeessfully');

    }
    public function crPostByBatch($id){
        $allposts = DB::select("select posttitle,postdetails,
DATE_FORMAT(updated_at, '%a %D %b %Y %h:%i %r') as updated_at,
DATE_FORMAT(updated_at, '%a %D %b %Y') as dated,
DATE_FORMAT(updated_at, '%r') as timed
 from cr_post_tables where crid = '$id' order by id desc");

        $crlist = DB::select("select * from classrepresentators");
        return view('FontEnd.crPost.crallpost',['allposts'=>$allposts,'crlists'=>$crlist]);
    }

    public function crAllPost(){
        $allposts = DB::select("select cr_post_tables.posttitle,cr_post_tables.postdetails,
DATE_FORMAT(cr_post_tables.updated_at, '%a %D %b %Y %h:%i %r') as updated_at,
DATE_FORMAT(cr_post_tables.updated_at, '%a %D %b %Y') as dated,
DATE_FORMAT(cr_post_tables.updated_at, '%r') as timed,classrepresentators.*
 from cr_post_tables join classrepresentators on cr_post_tables.crid = classrepresentators.id order by id desc");

        $crlist = DB::select("select * from classrepresentators");
        return view('FontEnd.crPost.crallpost',['allposts'=>$allposts,'crlists'=>$crlist]);
    }


    /// Posts
}
