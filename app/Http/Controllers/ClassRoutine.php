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
}
