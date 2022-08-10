<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function offercourses1(Request $req){
        $sess = $req->sess ;
        $sem = $req->sem ; 
        
        $rows = DB::table('offered_courses') 
                    -> join('courses','courses.course_code', '=', 'offered_courses.course_code')
                    -> join('teacher','teacher.T_Id', '=', 'offered_courses.T_Id')
                    -> where('session_year',$sess)
                    -> where('sem_n',$sem)
                    -> get();

        if( count($rows) == 0 ){
            return redirect()->back()->with('null','No Course Found !!!');
        }
        else {
            return redirect()->back()->with('rows',$rows);
        }
    }
}
