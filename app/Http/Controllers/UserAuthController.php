<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    function SessionExample(Request $req)
    {
        $data = $req->input('username');
        $req->session()->put('username',$data);
        return redirect('profile');
    }
}
