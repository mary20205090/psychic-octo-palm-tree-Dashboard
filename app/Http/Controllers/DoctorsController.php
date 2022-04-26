<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    //
    function addDoctor(Request $req)
    {
        $daktari= new  Doctor;
        $daktari->name=$req->name;
        $daktari->email=$req->email;
        $daktari->save();
        return redirect('viewdoctors');
    }



    function showDoctors()
    {
        $daktari= Doctor::all();
        // $count = DB::table('doctors')->count();
        // return view('welcome',compact('daktari'));
        return view('welcome',['doctors'=>$daktari]);




    }

}
