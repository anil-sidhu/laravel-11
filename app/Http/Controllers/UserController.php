<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login(Request $request){
       echo $request->method();
       echo "<br />";
       echo $request->path();
       echo "<br />";
       echo $request->input('name');
       echo "<br />";
       print_r($request->input());
       echo "<br />";
       print_r($request->collect());
       echo "<br />";
       echo $request->ip();
       echo "<br />";

       if($request->method('post')){
        echo "this is post request code";
       }else{
        echo "this is other request code";
       } 
       echo "<br />";
       if($request->is('user')){
        echo "this is user path  request ";
       }else{
        echo "this is other path request";
       } 
    }
}
