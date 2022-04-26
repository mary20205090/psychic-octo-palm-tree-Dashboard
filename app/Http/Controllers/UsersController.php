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
        $count = DB::table('users')->count();
        // dd($count);
        return view('welcome',compact('data', 'count'));



    }


 

}
