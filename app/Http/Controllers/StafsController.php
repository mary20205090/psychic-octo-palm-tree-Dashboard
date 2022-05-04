<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Staf;

class StafsController extends Controller
{
    //
    function createStaff(Request $req)
    {
        $staff = new Staf;
        $staff->name=$req->name;
        $staff->email=$req->email;
        $staff->save();
        return redirect('viewstaff');
    }   
    function showStaff()
    {
        $staff = Staf::all();
        // $count = DB::table('stafs')->count();
        // return view('welcome',compact('staff', 'count'));
        return view('viewstaff',['staffs'=>$staff]);
        
    }
    function delete($id)
    {
        $staff=Staf::find($id);
        // dd(json_decode($staff));
        $staff->delete();
        return redirect('viewstaff');

    }
    function edit($id)
    {
        $staff= Staf::find($id);
        return view('updatestaff',['staff'=>$staff]); 
    }

    function update(Request $req)
    {
        // dd($req->all());
        $staff = Staf::find($req->id);
        $staff->name=$req->name;
        $staff->email=$req->email;
        $staff->save();
        return redirect('viewstaff');


        // return $req->input();

     
        
        
    }
}
