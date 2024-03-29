<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassRoutine;
use App\Http\Controllers\AdminActivity;
use App\Http\Controllers\StudentActivity;
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


Route::get('teacher-register',function(){
    return view('admin.teacher_register');
});


Route::get('offer-courses',[AdminActivity::class,'offercourses']);
Route::post('add-courses',[AdminActivity::class,'addcourse']);
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



Route::get('login',[LoginActivity::class,'login']);
Route::post('check-login',[LoginActivity::class,'checklogin']);
Route::get('logout',[LoginActivity::class,'logout']);

Route::get('change-password',[LoginActivity::class,'change_password'])->middleware('adminLogin');
Route::post('store-password',[LoginActivity::class,'store_password'])->middleware('adminLogin');



Route::get('dashboard',[AdminActivity::class,'dashboard'])->middleware('adminLogin');
Route::get('profile',[AdminActivity::class,'profile'])->middleware('adminLogin');
Route::get('registration',[AdminActivity::class,'registration'])->middleware('adminLogin');
Route::get('student-register',[AdminActivity::class,'student_register'])->middleware('adminLogin');
Route::post('store-student',[AdminActivity::class,'store_student'])->middleware('adminLogin');
Route::get('teacher-register',[AdminActivity::class,'teacher_register'])->middleware('adminLogin');
Route::post('store-teacher',[AdminActivity::class,'store_teacher'])->middleware('adminLogin');
Route::get('advisorship',[AdminActivity::class,'advisorship'])->middleware('adminLogin');
Route::post('store-advisor',[AdminActivity::class,'store_advisor'])->middleware('adminLogin');

Route::get('session-section',[AdminActivity::class,'session_section'])->middleware('adminLogin');
Route::get('session',[AdminActivity::class,'session'])->middleware('adminLogin');
Route::post('store-session',[AdminActivity::class,'store_session'])->middleware('adminLogin');
Route::get('section',[AdminActivity::class,'section'])->middleware('adminLogin');
Route::get('activate-session',[AdminActivity::class,'activate_session'])->middleware('adminLogin');
Route::get('store-activate-session/{id}',[AdminActivity::class,'store_activate_session'])->middleware('adminLogin');

// store section left 

Route::get('course-detail',[AdminActivity::class,'course_detail'])->middleware('adminLogin');
Route::get('add-new-course',[AdminActivity::class,'add_new_course'])->middleware('adminLogin');
Route::post('store-course',[AdminActivity::class,'store_course'])->middleware('adminLogin');
Route::post('show-course',[AdminActivity::class,'show_course'])->middleware('adminLogin');
Route::get('all-course',[AdminActivity::class,'all_course'])->middleware('adminLogin');
Route::get('offer-course',[AdminActivity::class,'offer_course'])->middleware('adminLogin');

Route::get('offer-course-section/{id}',[AdminActivity::class,'offer_course_section'])->middleware('adminLogin');
Route::post('add-course',[AdminActivity::class,'add_course'])->middleware('adminLogin');


Route::get('pre-enrollment',[AdminActivity::class,'pre_enrollment'])->middleware('adminLogin');
Route::get('pre-enrollment-activity/{id}',[AdminActivity::class,'pre_enrollment_activity'])->middleware('adminLogin');
Route::post('pre-add-course/{id}',[AdminActivity::class,'pre_add_course'])->middleware('adminLogin');
Route::get('pre-remove-course/{id}',[AdminActivity::class,'pre_remove_course'])->middleware('adminLogin');


Route::get('pre-check-response/{id}',[AdminActivity::class,'pre_check_response'])->middleware('adminLogin');
Route::post('check-details',[AdminActivity::class,'check_details'])->middleware('adminLogin');

Route::get('check-overlap',[AdminActivity::class,'check_overlap'])->middleware('adminLogin');

Route::get('student-dashboard',[StudentActivity::class,'dashboard'])->middleware('studentLogin');
Route::get('student-pre-enrollment',[StudentActivity::class,'pre_enrollment'])->middleware('studentLogin');
Route::post('store-enroll',[StudentActivity::class,'store_enroll'])->middleware('studentLogin');
Route::get('remove-enroll/{id}',[StudentActivity::class,'remove_enroll'])->middleware('studentLogin');










