<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassRoutine;
use App\Http\Controllers\AdminActivity;
use App\Http\Controllers\LoginActivity;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('teacher-login',function(){
    return view('teacher.login');
});
Route::get('student-login',function(){
    return view('student.login');
});
Route::get('admin-login',function(){
    return view('admin.login');
});


Route::get('admin-dashboard',function(){
    return view('admin.dashboard');
});

Route::get('student-register',function(){
    return view('admin.student_register');
});
Route::get('teacher-register',function(){
    return view('admin.teacher_register');
});


Route::get('offer-course',[AdminActivity::class,'offercourses']);
Route::post('add-course',[AdminActivity::class,'addcourse']);
Route::get('edit-routine/{serial}',[AdminActivity::class,'show']);
Route::post('store-routine/{serial}',[AdminActivity::class , 'storeroutine']);
Route::get('delete-routine/{serial}',[AdminActivity::class , 'deleteroutine']);
Route::get('update-routine/{serial}',[AdminActivity::class , 'updateroutine']);
Route::post('update-routine-entry/{serial}',[AdminActivity::class , 'updateroutineentry']);



Route::get('class-routine', [ClassRoutine::class , 'rout']);
Route::post('courses-details', [ClassRoutine::class , 'rout1']);
Route::post('all-courses', [ClassRoutine::class , 'rout1']);




Route::get('create', [ImageController::class , 'create']);
Route::post('create', [ImageController::class , 'store']);


Route::get('admin-assign',function(){return view('admin_assign');});
Route::post('admin-registration',[AdminActivity::class,'adminassign']);



Route::get('login-admin',function(){return view('admin.pages.login');});
Route::post('check-login',[LoginActivity::class,'checklogin']);
Route::get('logout',[LoginActivity::class,'logout']);


Route::get('profile',[AdminActivity::class,'profile'])->middleware('adminLogin');
Route::get('dashboard',[AdminActivity::class,'dashboard'])->middleware('adminLogin');
