<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  

    function post(Request $request){
    
        echo  $request->method();    
        echo $request->ip();
        echo $request->path();
        echo $request->url();
        print_r($request->input());
        print_r($request->input('user'));
        print_r($request->user);
        print_r($request->collect());

        if ($request->isMethod('post')) {
           echo "run this code";
        }
        echo $request->host();
        if ($request->is('user')) {
            echo "path is user";
        }

      
    }

 
}
