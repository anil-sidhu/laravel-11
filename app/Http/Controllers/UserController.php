<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        
        // return "this is anil sidhu";
        return view('user');
    }
    function aboutUser($name){
        // return "Hello, this is ".$name;
        return view('about',['name'=>$name]);
    }
    function adminLogin(){
        // return "Hello, this is ".$name;
        return view('admin.login');
    }
}
