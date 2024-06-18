<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function addUser(Request $request){

        $request->session()->flash("message","User added successfully");
        $request->session()->flash("name","anil");

        //store user data in DB

        return redirect('user');
    }
}
