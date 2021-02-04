<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeUserController extends Controller
{
    function addMember(Request $req)
    {
        $data = $req->input('username');
        $req->session()->flash('username',$data);
        return view('storeUsers');
    }
}
