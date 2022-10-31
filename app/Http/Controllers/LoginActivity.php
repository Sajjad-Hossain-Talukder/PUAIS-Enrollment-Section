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
    public function change_password(){
        return view('admin.pages.change_password');
    }
    public function login(){

        if( Session::get('userrole') == 'admin')  return redirect('dashboard'); 
        if( Session::get('userrole') == 'student') return redirect('student-dashboard'); 
        return view('login');
    }

    public function store_password(Request $req){

        if(Session::get('userrole')=='admin'){
            $row = DB::table('all_users')->where('email',Session::get('useremail'))->first(); 
            if( md5($req->opass) == $row->password ){
                if( $req->npass == $req->cnpass ){
                    DB::table('all_users')->update(['password'=>md5($req->npass)])->where('email',Session::get('useremail'));
                }
                else redirect()->back()->with('match','password Mismatch');

            }
            else redirect()->back()->with('err','Old Password is wrong.Try again!!!');

        }

        if(Session::get('userrole')=='student'){
            
        }

      
        return view('login');
    }




}
