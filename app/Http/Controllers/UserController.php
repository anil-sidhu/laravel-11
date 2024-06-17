<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login(Request $request){
        $request->session()->put('user',$request->input('user'));
        $request->session()->put('allData',$request->input());


      return redirect('profile');
        
    }
    function logout(){
        session()->pull('user');
        return redirect('profile');
    }
}
