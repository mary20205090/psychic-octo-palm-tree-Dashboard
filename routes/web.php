<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\StafsController;


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
    return view('welcome');
});
Route::view('adduser','adduser');
Route::post('adduser',[UsersController::class,'addUser']);
Route::get('welcome',[UsersController::class,'showData']);
// Route::get('count/{id}',[MemberController::class,'count']);
Route::view('adddoctor','adddoctor');
Route::post('adddoctor',[DoctorsController::class,'addDoctor']);
Route::get('viewdoctors',[DoctorsController::class,'showDoctors']);

// nurses routes
Route::view('viewnurses','viewnurse');
Route::view('addnurse','addnurse');
Route::post('addnurse',[NurseController::class,'addNurse']);
Route::get('viewnurses',[NurseController::class,'showNurse']);

// patients route
Route::view('addpatient','addpatient');
Route::post('addpatient',[PatientsController::class,'addPatient']);
Route::get('viewpatients',[PatientsController::class,'showPatient']);

// non stuff routes
Route::view('addstaff','addstaff');
Route::post('addstaff',[StafsController::class,'createStaff']);
Route::get('viewstaff',[StafsController::class,'showStaff']);





