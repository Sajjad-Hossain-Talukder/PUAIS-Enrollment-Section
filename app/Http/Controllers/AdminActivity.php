<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        if(Session::get('userrole')== 'admin') return view('admin.pages.dashboard');
        if(Session::get('userrole')== 'teacher') return view('student.pages.teacher');   
    }

    public function adminassign(Request $req ){

        if ( $req->pass != $req->cpass  ) {
            return redirect()->back()->with('err_msg','Password Mismatch!!!');
        }
   
        $originalImage= $req->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        $obj1 = new all_user(); 

        $obj1->name = $req->nm ;  ; 
        $obj1->email = $req->em ; 
        $obj1->password = md5($req->pass) ; 
        $obj1->role = "admin"  ; 
        $obj1->is_approved = '1' ; 
        $obj1->image = time().$originalImage->getClientOriginalName();

        $obj2 = new Admin_info(); 

        $obj2->name = $req->nm ; 
        $obj2->designation = $req->desi;
        $obj2->contact = $req->cont ; 
        $obj2->email = $req->em ; 
        $obj2->password = md5($req->pass) ; 
        $obj2->image = time().$originalImage->getClientOriginalName();

       if ( $obj1->save() and $obj2->save() ) {
       
                return redirect()->back()->with('success','Succesfully Added!!!');
       }

    }

    public function profile(){
        $row = DB::table('admin_infos')
                ->where('email',Session::get('useremail'))
                ->first(); 
        return view('admin.pages.profile',['row'=>$row]);
    }

    public function registration(){
        return view('admin.pages.registration');
    }

    public function student_register(){
        return view('admin.pages.student_register');
    }
    public function store_student(Request $req){
       
        if ( $req->pass != $req->cpass  ) {
            return redirect()->back()->with('fail','Password Mismatch!!!');
        }
   
        $originalImage= $req->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        $obj1 = new Student_info();

        $obj1->name = $req->fname .' '.$req->lname;
        $obj1->father_name= $req->faname ; 
        $obj1->mother_name= $req->moname ; 
        $obj1->date_of_birth= $req->dob;
        $obj1->gender= $req->gend ; 
        $obj1->department= $req->dept; 
        $obj1->student_id= $req->sid ; 
        $obj1->batch= $req->batch ; 
        $obj1->email= $req->email; 
        $obj1->mobile= $req->mobile; 
        $obj1->address= $req->address ; 
        $obj1->image= time().$originalImage->getClientOriginalName();
        $obj1->password= md5($req->pass);

       $obj2 = new all_user(); 

        $obj2->name = $req->fname .' '.$req->lname;
        $obj2->email = $req->email ; 
        $obj2->password = md5($req->pass) ; 
        $obj2->role = "student"  ; 
        $obj2->is_approved = '1' ; 
        $obj2->image = time().$originalImage->getClientOriginalName();

        if ( $obj1->save() and $obj2->save() ) {
            return redirect()->back()->with('success','Succesfully Added!!!');
        }



    }
    public function teacher_register(){
        return view('admin.pages.teacher_register');
    }
    public function store_teacher(Request $req){
       
        if ( $req->pass != $req->cpass  ) {
            return redirect()->back()->with('fail','Password Mismatch!!!');
        }
   
        $originalImage= $req->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        $obj1 = new Teacher_info();

        $obj1->name = $req->fname .' '.$req->lname;
        $obj1->father_name= $req->faname ; 
        $obj1->mother_name= $req->moname ; 
        $obj1->date_of_birth= $req->dob;
        $obj1->gender= $req->gend ; 
        $obj1->department= $req->dept; 
        $obj1->teacher_id= $req->tid ; 
        $obj1->designation= $req->desi ; 
        $obj1->email= $req->email; 
        $obj1->mobile= $req->mobile; 
        $obj1->address= $req->address ; 
        $obj1->image= time().$originalImage->getClientOriginalName();
        $obj1->password= md5($req->pass);

       $obj2 = new all_user(); 

        $obj2->name = $req->fname .' '.$req->lname;
        $obj2->email = $req->email ; 
        $obj2->password = md5($req->pass) ; 
        $obj2->role = "teacher"  ; 
        $obj2->is_approved = '1' ; 
        $obj2->image = time().$originalImage->getClientOriginalName();

        if ( $obj1->save() and $obj2->save() ) {
            return redirect()->back()->with('success','Succesfully Added!!!');
        }



    }

    public function advisorship(){
        
        $stu = DB::table('student_infos')->whereNotIn('id', function($q){
                    $q->select('student_sl')->from('advisorship_infos');})->get();
       
        $tec = DB::table('teacher_infos')->get();

        echo count($stu);

        Session::forget('yes');
        Session::forget('no');

        if(count($stu) ) Session::put('yes',"yes" );
        else Session::put('no',"no" );



        return view('admin.pages.advisor_assign',['stu'=>$stu , 'tec'=>$tec ]);
       
    }
    public function store_advisor(Request $req){
        $obj = new Advisorship_info() ; 
        $obj->student_sl = $req->stu ; 
        $obj->teacher_sl = $req->tec ; 
        if ( $obj->save() ){
            return redirect()->back()->with('success','Succesfully Assigned!!!');
        }
    }
    public function session_section(){
        return view('admin.pages.session_section');
    }
    public function session(){
        $row = DB::table('session_infos')->get();
        return view('admin.pages.session',['row'=>$row]);
    }
    public function activate_session(){
        $row = DB::table('session_infos')->orderBy('created_at', 'desc')->get();
        $flight = Activate_session_info::find(1);
        if($flight) $sess = DB::table('session_infos')->where('id',$flight->session_sl)->first();
        else $sess = null;
        $row = (object) ($row);
        return view('admin.pages.activate_session',['row'=>$row,'sess'=>$sess ]);
    }
   
    public function store_activate_session($id){

        $flight = Activate_session_info::find(1);
        if($flight) {
            $flight->session_sl = $id ;
            $flight->save();
        }
        else {
            $obj = new Activate_session_info();
            $obj->session_sl = 0 ; 
            $obj->save();
        }

        return redirect()->back()->with('set','Session Resetted !!!');
    }
    public function store_session(Request $req){

        $obj = new Session_info(); 

        $obj->session_name = $req->sn ; 
        $obj->session_year = $req->sy ;

        if( $obj->save() ) {
            return redirect()->back()->with('success','Successfully Added!!');
        }

    }
    public function section(){
        return view('admin.pages.section');
    }

    public function course_detail(){

        $row = DB::table('course_infos as a')->select('b.id','b.nsemester','b.semester','b.course_code','a.course_title as pt','b.prerequisite','b.credit','b.course_title as ct')
                ->join('course_infos as b','a.id','b.prerequisite')
                ->get();
        $course = DB::table('course_infos')->get();


        return view('admin.pages.courses',['rows'=>$row , 'course'=>$course ]);

    }

    

    public function store_course(Request $req){
        if($req->sm == '1') $sem = 'First' ; 
        if($req->sm == '2') $sem = 'Second' ;
        if($req->sm == '3') $sem = 'Third' ;
        if($req->sm == '4') $sem = 'Fourth' ;
        if($req->sm == '5') $sem = 'Fifth' ;
        if($req->sm == '6') $sem = 'Sixth' ;
        if($req->sm == '7') $sem = 'Seventh' ;
        if($req->sm == '8') $sem = 'Eighth' ;

        $obj = new Course_info() ; 
        $obj->nsemester = $req->sm;
        $obj->semester = $sem;
        $obj->course_code = $req->cc;
        $obj->course_title = $req->ct ;
        $obj->prerequisite = $req->pcc;
        $obj->credit = $req->credit;

        if( $obj->save() ) {
            return redirect()->back()->with('success','Successfully Added!!');
        }



    }
    
    public function offer_course(){
        $row = DB::table('session_infos')->orderBy('created_at', 'desc')->get();
        $row = (object) ($row);
        return view('admin.pages.offer_course',['row'=>$row]);
    }
    public function offer_course_section($id){

        Session::forget('blank');

        $row = DB::table('session_infos')->where('id',$id)->first();
        $course = DB::table('course_infos')->get();
        $teacher = DB::table('teacher_infos')->get();

        $assigned = DB::table('offer_course_infos')
            -> join('course_infos','course_infos.id', '=', 'offer_course_infos.course_sl')
            -> join('teacher_infos','teacher_infos.id', '=', 'offer_course_infos.teacher_sl')
            -> where('session_sl',$id)
            ->orderBy('course_infos.nsemester', 'asc')
            -> get();

        if( !count($assigned) ) Session::put('blank','Sorry !! No Course assigned yet.');

        return view('admin.pages.offer_course_section',['row'=>$row,'course'=>$course,'teacher'=>$teacher , 'assigned' => $assigned ]); 
        
    }
    public function add_course(Request $req){

        $obj = new OfferCourse_info() ; 

        $obj->session_sl = $req->session ; 
        $obj->course_sl = $req->course ; 
        $obj->teacher_sl = $req->teacher ; 
        $obj->student_capacity = $req->sc ; 
        $obj->section = $req->sec ; 

        if ( $obj->save() ){
            Session::put('success','Successfully Added !');
            $row = DB::table('session_infos')->where('id',$req->session)->first();
            $course = DB::table('course_infos')->get();
            $teacher = DB::table('teacher_infos')->get();
            return redirect('offer-course-section/'.$req->session);
        }

    }
    public function pre_enrollment(){

        $row = DB::table('session_infos')->orderBy('created_at', 'desc')->get();
        $row = (object) ($row);
        return view('admin.pages.pre_enrollment',['row'=>$row]);
    }
    public function pre_enrollment_activity($id){

        $row = DB::table('session_infos')->where('id',$id)->first();
        $assigned = DB::table('pre_offer_course_infos')
            -> join('course_infos','course_infos.id', '=', 'pre_offer_course_infos.course_sl')
            -> where('session_sl',$id)
            -> orderBy('course_infos.nsemester', 'asc')
            -> get(); 


        $ass = DB::table('pre_offer_course_infos')->where('session_sl',$id)->get();
        $all = DB::table('course_infos')->get();
        $flag = 0 ; 
        foreach ($all as $a ) {
            foreach ($ass as $as ){
                if($a->id == $as->course_sl || $a->id == 1 ) {
                    $a->id = 0 ;
                }
            }
            if($a->id > 1 ) {
                echo $a->course_title;
                $flag = 1 ; 
            }
        }

        $course = DB::table('pre_offer_course_infos')
                    ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
                    ->where('session_sl',  $id )
                    ->get();

        $det = [];

        for( $i = 0 ; $i < count($course) ; $i++ ){

    
            $course_count = DB::table('pre_enroll_course_infos')->where('course_sl','=', $course[$i]->course_sl )->where('session_sl','=',$id)->count();
            $regular = DB::table('pre_enroll_course_infos')->where('course_sl','=', $course[$i]->course_sl )->where('session_sl','=',$id)->where('type','=','Regular')->count();
            $retake = DB::table('pre_enroll_course_infos')->where('course_sl', '=',$course[$i]->course_sl )->where('session_sl','=',$id)->where('type','=','Retake')->count();
            $recourse = DB::table('pre_enroll_course_infos')->where('course_sl','=', $course[$i]->course_sl )->where('session_sl','=',$id)->where('type','=','Recourse')->count();

            $object = (object) [
                'id' =>  $course[$i]->id,
                'course_code' => $course[$i]->course_code,
                'semester' => $course[$i]->semester,
                'course_title' => $course[$i]->course_title,
                'course_count' => $course_count,
                'regular' => $regular,
                'retake' => $retake,
                'recourse' => $recourse
              ];

            array_push($det, $object);
                    
        }

        $det = collect($det);
        $det = $det->sortByDesc('course_count');


        //-----------------------
        
        $enr_stu = DB::table('pre_enroll_course_infos')
            ->select('student_sl')
            ->where('session_sl',$id)
            ->groupBy('student_sl')
            ->get();

        $course_l = DB::table('pre_offer_course_infos')
            ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
            ->where('pre_offer_course_infos.session_sl',$id)
            ->get();

        //dd($course);

        $rest = array();
        $cour_list = array(); 
        $ans_temp =array(1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0);
        foreach ($course_l as $r ) {
            //echo $r->id."<br>" ; 
            $rest = Arr::add($rest,$r->id,$ans_temp);
            $cour_list = Arr::add($cour_list,$r->id,0);
        }
       
       // dd($cour); 

        foreach ($enr_stu as $r ) {
            $cor =array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0,"6"=>0,"7"=>0,"8"=>0);
            
            $enr = DB::table('pre_enroll_course_infos')
                ->join('pre_offer_course_infos','pre_offer_course_infos.course_sl','pre_enroll_course_infos.course_sl')
                ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
                ->where('pre_enroll_course_infos.session_sl',$id)
                ->where('pre_enroll_course_infos.student_sl',$r->student_sl)
                ->where('pre_enroll_course_infos.type','<>','Retake')
                ->get();

            foreach($enr as $c ){
                $cor[$c->nsemester]+=1;
            }
        
            $stu_sem = 1 ; 
            $max = 0 ; 
            for($c = 1 ; $c <= 8 ; $c++ ) {
                if($max <= $cor[$c] ){
                    $stu_sem = $c ; 
                    $max = $cor[$c];
                }
            }

            foreach($enr as $c ){
                if($c->nsemester != $stu_sem ){
                    $rest[$c->id][$stu_sem]+=1;
                    $cour_list[$c->id]+=1;
                }
            }

        }

        arsort($cour_list);
        $fin= array();

        foreach($cour_list as $x => $x_value) {
            $temp = array(); 
            $row_wor = DB::table('course_infos')->where('id',$x)->first();
            array_push($temp,$row_wor->course_title);
            array_push($temp,$row_wor->course_code);
            array_push($temp,$row_wor->semester);
            array_push($temp,$x_value);
            array_push($temp,$row_wor->id);
            array_push($fin,$temp);
        }
       

        //-----------------------



        return view('admin.pages.pre_enrollment_activity',['flag'=>$flag,'row'=>$row,'assigned'=>$assigned , 'ass'=>$all,'det'=>$det,'ans'=>$fin,'res'=>$rest]);

    }
    public function pre_add_course(Request $req , $id ){
    
        $d = count($req->select);
        if($d){
            for($i = 0 ; $i < $d ; $i++ ){
                $obj = new PreOfferCourse_info();
            
                $obj->course_sl = $req->select[$i] ;
                $obj->session_sl = $id ; 

                $obj->save();
            }
            return redirect()->back()->with('success','Succesfully Added!!');
        }
        else  return redirect()->back();

    }
    public function pre_remove_course($id){
        DB::table('pre_offer_course_infos')->where('course_sl',$id)->where('session_sl',Session::get('ses'))->delete();
        DB::table('pre_enroll_course_infos')->where('course_sl',$id)->where('session_sl',Session::get('ses'))->delete();
        return redirect()->back();
    }
    public function pre_check_response($id){

        $row = DB::table('session_infos')->where('id',$id)->first();
        /*
        $course = DB::table('pre_enroll_course_infos')
                    ->join('course_infos','course_infos.id','pre_enroll_course_infos.course_sl')
                    ->groupBy('pre_enroll_course_infos.course_sl')
                    ->where('session_sl',$id)
                    ->get();
                    */
        $course = DB::table('pre_offer_course_infos')
                    ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
                    ->where('session_sl',  $id )
                    ->get();

        $det = [];

        for( $i = 0 ; $i < count($course) ; $i++ ){

            $course_count = DB::table('pre_enroll_course_infos')->where('course_sl', $course[$i]->course_sl )->where('session_sl',$id)->count();
            $regular = DB::table('pre_enroll_course_infos')->where('course_sl', $course[$i]->course_sl )->where('session_sl',$id)->where('type','Regular')->count();
            $retake = DB::table('pre_enroll_course_infos')->where('course_sl', $course[$i]->course_sl )->where('session_sl',$id)->where('type','Retake')->count();
            $recourse = DB::table('pre_enroll_course_infos')->where('course_sl', $course[$i]->course_sl )->where('session_sl',$id)->where('type','Recourse')->count();

            $object = (object) [
                'id' =>  $course[$i]->id,
                'course_code' => $course[$i]->course_code,
                'semester' => $course[$i]->semester,
                'course_title' => $course[$i]->course_title,
                'course_count' => $course_count,
                'regular' => $regular,
                'retake' => $retake,
                'recourse' => $recourse
              ];

            array_push($det, $object);
                    
        }
         return view('admin.pages.pre_check_response',['row'=>$row,'det'=>$det]);
    }

    public function check_details( Request $req ){

        //echo $req->sess." ".$req->cour;
        $row = DB::table('course_infos')->where('id',$req->cour)->first();

        $stu = DB::table('pre_enroll_course_infos')
                ->join('student_infos','student_infos.id','pre_enroll_course_infos.student_sl')
                ->join('course_infos','course_infos.id','pre_enroll_course_infos.course_sl')
                ->where('course_sl','=',$req->cour)
                ->where('session_sl',$req->sess )
                ->orderby('type','desc')
                ->get();
        
        return view('admin.pages.check_details',['row'=>$row,'stu'=>$stu]);
    }

    public function show_course ( Request $req){


       // dd($req);

        if ( $req->sem == 0  ) return redirect()->back(); 
        else {
            $row = DB::table('course_infos')->where('nsemester',$req->sem)->get();
            if($req->sem == 1 ) $sem = 'First';
            if($req->sem == 2 ) $sem = 'Second';
            if($req->sem == 3 ) $sem = 'Third';
            if($req->sem == 4 ) $sem = 'Fourth';
            if($req->sem == 5 ) $sem = 'Fifth';
            if($req->sem == 6 ) $sem = 'Sixth';
            if($req->sem == 7 ) $sem = 'Seventh';
            if($req->sem == 8 ) $sem = 'Eighth';

            if(count($row))
                return redirect()->back()->with('row',$row)->with('sem',$sem);
            else 
                return redirect()->back()->with('not_found','No Course Found!!!')->with('sem',$sem);
        }
        
    }


    public function pre_add_new_course($id){

        $row = DB::table('session_infos')->where('id',$id)->first();

        $assigned = DB::table('pre_offer_course_infos')->where('session_sl',$id)->get();
        
        $all = DB::table('course_infos')->get();

        foreach ($all as $a ) {
            foreach ($assigned as $ass ){
                if($a->id == $ass->course_sl || $a->id == 1 ) 
                    $a->id = 0 ;
            }
        }
      
        return view('admin.pages.pre_add_new_course',['assigned'=>$all ,'row'=>$row ,]);

    }

/*
    public function check_overlap(){
        $id = '13';
        $sess = $id;

        $enr_stu = DB::table('pre_enroll_course_infos')
            ->select('student_sl')
            ->where('session_sl',$id)
            ->groupBy('student_sl')
            ->get();

        $course_l = DB::table('pre_offer_course_infos')
            ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
            ->where('pre_offer_course_infos.session_sl',$id)
            ->get();

        //dd($course);

        $rest = array();
        $cour_list = array(); 
        $ans_temp =array(1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0);
        foreach ($course_l as $r ) {
            //echo $r->id."<br>" ; 
            $rest = Arr::add($rest,$r->id,$ans_temp);
            $cour_list = Arr::add($cour_list,$r->id,0);
        }
       
       // dd($cour); 

        foreach ($enr_stu as $r ) {
            $cor =array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0,"6"=>0,"7"=>0,"8"=>0);
            
            $enr = DB::table('pre_enroll_course_infos')
                ->join('pre_offer_course_infos','pre_offer_course_infos.course_sl','pre_enroll_course_infos.course_sl')
                ->join('course_infos','course_infos.id','pre_offer_course_infos.course_sl')
                ->where('pre_enroll_course_infos.session_sl',$id)
                ->where('pre_enroll_course_infos.student_sl',$r->student_sl)
                ->where('pre_enroll_course_infos.type','<>','Retake')
                ->get();

            foreach($enr as $c ){
                $cor[$c->nsemester]+=1;
            }
        
            $stu_sem = 1 ; 
            $max = 0 ; 
            for($c = 1 ; $c <= 8 ; $c++ ) {
                if($max <= $cor[$c] ){
                    $stu_sem = $c ; 
                    $max = $cor[$c];
                }
            }

            foreach($enr as $c ){
                if($c->nsemester != $stu_sem ){
                    $rest[$c->id][$stu_sem]+=1;
                    $cour_list[$c->id]+=1;
                }
            }

        }

        arsort($cour_list);
        $fin= array();

        foreach($cour_list as $x => $x_value) {
            $temp = array(); 
            $row_wor = DB::table('course_infos')->where('id',$x)->first();
            array_push($temp,$row_wor->course_title);
            array_push($temp,$row_wor->course_code);
            array_push($temp,$row_wor->semester);
            array_push($temp,$x_value);
            array_push($temp,$row_wor->id);
            array_push($fin,$temp);
        }
       
        
        return view('admin.pages.check_overlap', ['ans'=>$fin,'res'=>$rest]);
    }

*/

}

