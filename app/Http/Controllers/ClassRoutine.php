<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;

class ClassRoutine extends Controller
{
    public function rout(){
       $session = DB::table('all_session')
        ->get();
        return view('admin.routine',['session' => $session]);
    }
    public function rout1(Request $req){
        $val = $req->sess ;
        echo $val ;
        $rows = DB::table('offered_courses') 
                    -> join('courses','courses.course_code', '=', 'offered_courses.course_code')
                    -> join('teacher','teacher.T_Id', '=', 'offered_courses.T_Id')
                    -> where('session_year',$val)
                    -> get();
       // dd ($rows);
       
        return view('admin.all_courses',['rows' => $rows]);
    }
}
