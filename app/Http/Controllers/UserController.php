<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){
        echo $request->city;
        echo "<br/>";
        echo $request->gender;
        echo "<br/>";
        echo $request->age;
        echo "<br/>";
        print_r($request->skill);
        // return $request;
    }
}
