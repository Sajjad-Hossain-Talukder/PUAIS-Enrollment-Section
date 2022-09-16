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
        return view('admin.pages.advisor_assign');
    }
    public function assign_advisor(){
        
        $stu = DB::table('student_infos')->whereNotIn('id', function($q){
                    $q->select('student_sl')->from('advisorship_infos');})->get();
       
        $tec = DB::table('teacher_infos')->get();

        echo count($stu);

        Session::forget('yes');
        Session::forget('no');

        if(count($stu) ) Session::put('yes',"yes" );
        else Session::put('no',"no" );



        return view('admin.pages.advisor_assign_two',['stu'=>$stu , 'tec'=>$tec ]);
       
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
        return view('admin.pages.courses');
    }
    public function add_new_course(){
        $row = DB::table('course_infos')->get();
        return view('admin.pages.new_course',['row'=>$row]);
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
    public function all_course(){
        $row = DB::table('course_infos as a')->select('b.id','b.nsemester','b.semester','b.course_code','a.course_title as pt','b.prerequisite','b.credit','b.course_title as ct')
                ->join('course_infos as b','a.id','b.prerequisite')
                ->get();
        return view('admin.pages.all_course',['row'=>$row]);
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
    public function pre_enrollment_offer_course($id){

        $row = DB::table('session_infos')->where('id',$id)->first();
        return view('admin.pages.pre_enrollment_offer_course',['row'=>$row]);

    }
    public function pre_all_assigned_course($id){

        $row = DB::table('session_infos')->where('id',$id)->first();

        $assigned = DB::table('pre_offer_course_infos')
        -> join('course_infos','course_infos.id', '=', 'pre_offer_course_infos.course_sl')
        -> where('session_sl',$id)
        -> orderBy('course_infos.nsemester', 'asc')
        -> get(); 

        return view('admin.pages.pre_all_assigned_course',['assigned'=>$assigned,'row'=>$row]);
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

    public function pre_add_course(Request $req , $id ){
        
        $obj = new PreOfferCourse_info();
        $obj->course_sl = $req->cid ;
        $obj->session_sl = $id ; 

        if($obj->save()){
            return redirect()->back()->with('success','Succesfully Added!!');
        }

    }



}
