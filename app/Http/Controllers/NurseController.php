<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nurse;

class NurseController extends Controller
{
    //
    function addNurse(Request $req)
    {
        $att = new Nurse;
        $att->name=$req->name;
        $att->email=$req->email;
        $att->save();
        return redirect('viewnurses');

    }
    function showNurse()
    {
        $att=Nurse::all();
        // $count = DB::table('nurses')->count();
        return view('viewnurse',['nurses'=>$att]);


    }
    function delete($id)
    {
        $att=Nurse::find($id);
        $att->delete();
        return redirect('viewnurses');

    }
    function editNurse($id)
    {
        $att= Nurse::find($id);
        return view('updatenurse',['att'=>$att]); 
    }

    function updateNurse(Request $req)
    {
        // dd($req->all());
        $att = Nurse::find($req->id);
        $att->name=$req->name;
        $att->email=$req->email;
        $att->save();
        return redirect('viewnurses');


        // return $req->input();

     
        
        
    }


    

}
