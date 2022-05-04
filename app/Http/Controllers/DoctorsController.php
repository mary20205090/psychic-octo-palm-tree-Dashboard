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
        return view('viewdoctors',['doctors'=>$daktari]);


    }
    function delete($id)
    {
        $daktari=Doctor::find($id);
        $daktari->delete();
        return redirect('viewdoctors');

    }
    function editDoctor($id)
    {
        $daktari= Doctor::find($id);
        return view('updatedoctor',['daktari'=>$daktari]); 
    }

    function updateDoctor(Request $req)
    {
        // dd($req->all());
        $daktari = Doctor::find($req->id);
        $daktari->name=$req->name;
        $daktari->email=$req->email;
        $daktari->save();
        return redirect('viewdoctors');


        // return $req->input();

     
        
        
    }


}

 