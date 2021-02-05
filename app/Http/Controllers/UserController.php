<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //Fetch Data directly
    function index()
    {
        return DB::select("select * from users");
    }

    //Fetch data with model
    function getData()
    {
        //return User::all();
        $data = User::all();
        return view('showData',['users'=>$data]);
    }
}
