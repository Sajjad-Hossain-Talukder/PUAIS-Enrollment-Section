<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
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
        
        return view('admin.edit_routine',['det'=>$det , 'rout' => $rout]);

    }

    public function storeroutine(Request $req , $serial){

        $st = $req->st ; 
        $et = $req->et ; 
        $day = $req->day ; 
        $rn = $req->rn ; 

        $startTime = Carbon::parse($req->st);
        $finishTime = Carbon::parse($req->et);

        $totalDuration = $finishTime->diffInMinutes($startTime) ;

        $row = DB::table('offered_courses') -> where('serial',$serial)->first() ; 

        $twelve_st = date("g", strtotime($st));
        $twelve_et =  date("g:i a", strtotime($st));
        DB::table('routine')->insert([
            'course_code' => $row->course_code , 
            'section' => $row->section ,
            'session_year' => $row->session_year , 
            'start_time' => $twelve_st , 
            'end_time' => $et , 
            'duration' => $totalDuration , 
            'day' => $day , 
            'room' => $rn ,
        ]);
        

       // dd($totalDuration);


        return view('welcome' ,['st'=>$totalDuration]);

    }

}
