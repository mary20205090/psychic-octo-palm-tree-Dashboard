<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class UsersController extends Controller
{
    //

    function addUser(Request $req)
    {
        $data = new User;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->department=$req->department;
        $data->save();
        return redirect('welcome');

    }
    function showData()
    {
        // return User::all();
        // return DB::select('SELECT ID  FROM users ');
        $data= User::all();
        // $count = DB::table('users')->count();
        // dd($count);
        // return view('welcome',compact('data', 'count'));
        return view('welcome',['users'=>$data]);

    }


    function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('welcome');

    }
    function edit($id)
    {
        $data= User::find($id);
        return view('updateuser',['data'=>$data]); 
    }

    function update(Request $req)
    {
        // dd($req->all());
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->department=$req->department; 
        $data->save();
        return redirect('welcome');


        // return $req->input();

      
    }



}
