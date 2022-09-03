<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\all_user ;
use Image;
use Carbon\Carbon;
use DB ;

class AdminActivity extends Controller
{
    public function offercourses(){
        $session = DB::table('all_session')
                        ->get();
        $course = DB::table('courses')
                        ->get();
        $teacher = DB::table('teacher')
                        ->get();

        return view('admin.offercourses',['session' => $session , 'course' => $course , 'teacher' => $teacher ]);
    }
    public function addcourse(Request $req){
        $sess = $req->sess ;
        $course = $req->course ; 
        $sec = $req->sec ;
        $teacher = $req->teacher  ;

        
        DB::table('offered_courses') ->insert([
                'course_code' => $course  , 
                'section' => $sec, 
                'session_year' => $sess , 
                'T_Id' => $teacher 
        ]) ; 
        return redirect()->back();
    }
    public function show($serial){
        //$person = DB::table('persons') -> where ('Id','=',$id) ->first() ; 

        $det = DB::table('offered_courses')
                -> join('courses','courses.course_code', '=', 'offered_courses.course_code')
                -> join('teacher','teacher.T_Id', '=', 'offered_courses.T_Id')
                -> where('serial',$serial)
                -> first();

        $row = DB::table('offered_courses') -> where('serial',$serial)->first() ;

        $rout = DB::table('routine') -> where('course_code',$row->course_code)->get(); 
        $leng = count($rout);
        
        return view('admin.edit_routine',['det'=>$det , 'rout' => $rout , 'leng' => $leng ]);

    }

    public function storeroutine(Request $req , $serial){

        $st = $req->st ; 
        $et = $req->et ; 
        $day = $req->day ; 
        $rn = $req->rn ; 

        $startTime = Carbon::parse($req->st);
        $finishTime = Carbon::parse($req->et);

        $totalDuration = $finishTime->diffInMinutes($startTime) ;

        $row = DB::table('routine') -> where('serial',$serial)->first() ; 

        $twelve_st = date("g", strtotime($st));
        $twelve_et =  date("g:i a", strtotime($st));
        
        DB::table('routine')->insert([
            'course_code' => $row->course_code , 
            'section' => $row->section ,
            'session_year' => $row->session_year , 
            'start_time' => $st , 
            'end_time' => $et , 
            'duration' => $totalDuration , 
            'day' => $day , 
            'room' => $rn ,
        ]);
        

       // dd($totalDuration);


       return redirect('edit-routine/'.$serial);


    }

    public function updateroutineentry(Request $req , $serial){

        $st = $req->st ; 
        $et = $req->et ; 
        $day = $req->day ; 
        $rn = $req->rn ; 

        $startTime = Carbon::parse($req->st);
        $finishTime = Carbon::parse($req->et);

        $totalDuration = $finishTime->diffInMinutes($startTime) ;

        //$row = DB::table('routine') -> where('serial',$serial)->first() ; 

        $twelve_st = date("g", strtotime($st));
        $twelve_et =  date("g:i a", strtotime($st));
        
        DB::table('routine')->where('serial',$serial)->update([
            'start_time' => $st , 
            'end_time' => $et , 
            'duration' => $totalDuration , 
            'day' => $day , 
            'room' => $rn ,
        ]);
        
        $val = DB::table('routine')->where('serial',$serial)->first();
        
        $a = DB::table('offered_courses')->where('course_code',$val->course_code)->first();
       


       return redirect('edit-routine/'.$a->serial);


    }

    public function deleteroutine($serial){
        DB::table('routine') ->where('serial',$serial)->delete(); 
        return redirect()->back();
    }
    
    public function updateroutine($serial){
        $row = DB::table('routine')->where('serial',$serial)->first();

        $val = DB::table('offered_courses')
                -> join('courses','courses.course_code', '=', 'offered_courses.course_code')
                -> join('teacher','teacher.T_Id', '=', 'offered_courses.T_Id')
                -> where('offered_courses.course_code','=',$row->course_code )
                -> first();
        
        return view('admin.update_routine',['det'=>$row , 'val'=>$val ]);
    }


    public function dashboard(){
        return view('admin.pages.dashboard');
    }

    public function adminassign(Request $req ){
        $nm = $req->nm ;
        $em = $req->em ; 
        $pass = $req->pass;
        $role ="admin" ;
        $is_appr = '1' ; 
        $originalImage= $req->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        $obj = new all_user(); 

        $obj->name = $nm  ; 
        $obj->email = $em ; 
        $obj->password = md5($pass) ; 
        $obj->role = $role  ; 
        $obj->is_approved = $is_appr ; 
        $obj->image = time().$originalImage->getClientOriginalName();


       if ( $obj->save()) {
       
            echo "successful";
       }
    }

}
