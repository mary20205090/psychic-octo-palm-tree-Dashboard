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


    function delete($id)
    {
        $person=Patient::find($id);
        $person->delete();
        return redirect('viewpatients');

    }
    function edit($id)
    {
        $person= Patient::find($id);
        return view('updatepatient',['patient'=>$person]); 
    }

    function update(Request $req)
    {
        // dd($req->all());
        $person = Patient::find($req->id);
        $person->name=$req->name;
        $person->email=$req->email;
        $person->save();
        return redirect('viewpatients');


        // return $req->input();

     
        
        
    }
}
