<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\all_user ;
use App\Models\Admin_info;
use App\Models\Student_info;
use App\Models\Teacher_info;
use App\Models\Session_info;
use App\Models\Course_info;
use App\Models\Advisorship_info;
use App\Models\OfferCourse_info;
use App\Models\PreOfferCourse_info;
use App\Models\Activate_session_info;
use App\Models\Pre_enroll_course_info;

use Image;
use Session;
use Carbon\Carbon;
use DB ;

class StudentActivity extends Controller
{
    public function dashboard(){
        if(Session::get('userrole')== 'student') {

            $row = DB::table('student_infos')->where('email',Session::get('useremail'))->first();
            $adv = DB::table('advisorship_infos')
                    ->join('teacher_infos','teacher_infos.id','advisorship_infos.teacher_sl')
                    ->where('student_sl',$row->id)
                    ->first(); 

            return view('student.pages.dashboard',['row'=>$row , 'adv'=>$adv ]);
        }
    }
    public function pre_enrollment(){

        Session::forget('close');

        $sess = DB::table('activate_session_infos')
                ->join('session_infos','session_infos.id','activate_session_infos.session_sl') 
                ->first();

       

        if($sess==null){
            Session::put('close','Pre-Enrollment is been Over. Wait for next pre-enrollment.');
            return view('student.pages.pre_enrollment');
        }
        else Session::put('sess',$sess->session_name." ".$sess->session_year);

        $row =  DB::table('pre_offer_course_infos')
                ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
                ->where('pre_offer_course_infos.session_sl',$sess->id)
                ->orderby('nsemester','asc')
                ->get(); 
        
        $stu = DB::table('student_infos')
                ->where('email',Session::get('useremail')) 
                ->first();

        $val = DB::table('pre_enroll_course_infos')
            ->where('pre_enroll_course_infos.session_sl',$sess->session_sl)
            ->where('pre_enroll_course_infos.student_sl',$stu->id )
            ->get();

        $fg = 0 ; 
        foreach($row as $r ){
            foreach($val as $v ){
                if($r->course_sl == $v->course_sl ){
                    $r->course_sl = 0 ; 
                } 
            }
            if($r->course_sl != 0 ) $fg = 1 ;
        }

        $enr = DB::table('pre_enroll_course_infos')
                ->join('course_infos','pre_enroll_course_infos.course_sl','course_infos.id')
                ->where('pre_enroll_course_infos.session_sl',$sess->id)
                ->where('pre_enroll_course_infos.student_sl',$stu->id)
                ->get();
    
        return view('student.pages.pre_enrollment',['row'=>$row ,'fg'=>$fg , 'enr'=>$enr ]);
    }


    public function store_enroll( Request $req){

        $sess = DB::table('activate_session_infos')
                ->join('session_infos','session_infos.id','activate_session_infos.session_sl') 
                ->first();

        $stu = DB::table('student_infos')
                ->where('email',Session::get('useremail')) 
                ->first();

        $row =  DB::table('pre_offer_course_infos')
                ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
                ->where('pre_offer_course_infos.session_sl',$sess->id)
                ->orderby('nsemester','asc')
                ->get();

        $val = DB::table('pre_enroll_course_infos')
            ->where('pre_enroll_course_infos.session_sl',$sess->session_sl)
            ->where('pre_enroll_course_infos.student_sl',$stu->id )
            ->get();

    
        foreach($row as $r ){
            foreach($val as $v ){
                if($r->course_sl == $v->course_sl ){
                    $r->course_sl = 0 ; 
                } 
            }
        }

        $d = count($req->select); 

        $l = count($row);
        $cnt = -1 ; 

        for( $i = 0 ; $i < $l ; $i++ ){
            if($row[$i]->course_sl != 0 ){
                $cnt += 1 ; 
                for($j = 0 ; $j < $d ; $j++ ){
                    if($req->select[$j] == $row[$i]->id  ){
                        $obj = new Pre_enroll_course_info() ; 
                        $obj->session_sl = $sess->id ; 
                        $obj->student_sl = $stu->id ; 
                        $obj->course_sl = $req->select[$j];
                        $obj->type = $req->type[$cnt];
                        $obj->save();

                    }
                }
            }
        }
        return redirect()->back();
    
    }

    public function remove_enroll($id){
        $sess = DB::table('activate_session_infos')
            ->join('session_infos','session_infos.id','activate_session_infos.session_sl') 
            ->first();

        $stu = DB::table('student_infos')
            ->where('email',Session::get('useremail')) 
            ->first();

        DB:: table('pre_enroll_course_infos')
            ->where('session_sl',$sess->id)
            ->where('student_sl',$stu->id)
            ->where('course_sl',$id)
            ->delete();
        
        return redirect()->back();
    }
}
