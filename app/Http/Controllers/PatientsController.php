<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;


class PatientsController extends Controller
{
    //
    function addPatient(Request $req)
    {
        $person= new  Patient;
        $person->name=$req->name;
        $person->email=$req->email;
        $person->save();
        return redirect('viewpatients');
    }


    function showPatient()
    {
        $person= Patient::all();
        // $count = DB::table('patients')->count();
        // return view('welcome',compact('person', 'count'));
        return view('viewpatient',['patients'=>$person]);




    }
}
