<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    function ApiRequestExample(Request $req)
    {
        //echo "Form Submitted";
        return $req->input();
    }
}
