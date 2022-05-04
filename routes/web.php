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
    return redirect('welcome');
});
Route::view('adduser','adduser');
Route::post('adduser',[UsersController::class,'addUser']);
Route::get('welcome',[UsersController::class,'showData']);
// DELETE
Route::get('delete1/{id}',[UsersController::class,'delete']);

// edit user
Route::get('edit1/{id}',[UsersController::class,'edit']);
Route::post('edit1',[UsersController::class,'update']);
// doctors route
Route::view('adddoctor','adddoctor');
Route::post('adddoctor',[DoctorsController::class,'addDoctor']);
Route::get('viewdoctors',[DoctorsController::class,'showDoctors']);
// edit doctors
Route::get('edit2/{id}',[DoctorsController::class,'editDoctor']);
Route::post('edit2',[DoctorsController::class,'updateDoctor']);
// DELETE
Route::get('delete2/{id}',[DoctorsController::class,'delete']);

// nurses routes
Route::view('viewnurses','viewnurse');
Route::view('addnurse','addnurse');
Route::post('addnurse',[NurseController::class,'addNurse']);
Route::get('viewnurses',[NurseController::class,'showNurse']);
// DELETE
Route::get('delete3/{id}',[NurseController::class,'delete']);

// edit nurse
Route::get('edit3/{id}',[NurseController::class,'editNurse']);
Route::post('edit3',[NurseController::class,'updateNurse']);



// patients route
Route::view('addpatient','addpatient');
Route::post('addpatient',[PatientsController::class,'addPatient']);
Route::get('viewpatients',[PatientsController::class,'showPatient']);
// edit patient
Route::get('edit4/{id}',[PatientsController::class,'edit']);
Route::post('edit',[PatientsController::class,'update']);
// DELETE
Route::get('delete4/{id}',[PatientsController::class,'delete']);


// non stuff routes
Route::view('addstaff','addstaff');
Route::post('addstaff',[StafsController::class,'createStaff']);
Route::get('viewstaff',[StafsController::class,'showStaff']);
// edit staff
 Route::get('edit/{id}',[StafsController::class,'edit']);
 Route::post('edit',[StafsController::class,'update']);
// DELETE
Route::get('delete/{id}',[StafsController::class,'delete']);






