<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_user ;
use Image;
use Carbon\Carbon;
use DB ;
use Session ; 

class LoginActivity extends Controller
{
    public function checklogin(Request $req){
        $em = $req->em ; 
        $pass = md5($req->pass);

        $row = DB::table('all_users')
                    ->where('email',$em)
                    ->where('password',$pass)
                    ->where('is_approved','1')
                    ->first(); 
        
        if($row){
            
                Session::put('username' , $row->name );
                Session::put('useremail' , $row->email ); 
                Session::put('userrole' , $row->role ); 
                Session::put('image' , $row->image); 

                if($row->role == 'admin' ) return redirect('dashboard');
                if($row->role == 'student' ) return redirect('student-dashboard');
            
        }
        else{
            return redirect()->back()->with('fail','Failed to login!!');
        }
    }
    public function logout(){
        Session::forget('userrole');
        return redirect('login');
    }

}
