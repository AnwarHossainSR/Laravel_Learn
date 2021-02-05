<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    function addData(Request $req)
    {
        $member = new User();
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('userdata');
    }

    function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('userdata');
    }

    function showData($id)
    {
       $data = User::find($id); 
       return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
       $data = User::find($req->id); 
       $data->name = $req->name;
       $data->email = $req->email;
       $data->address = $req->address;
       $data->save();
       return redirect('userdata');
    }
}
