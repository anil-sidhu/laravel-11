<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function add(Request $request){
        $student = new Student();
        $student->name= $request->name;
        $student->email= $request->email;
        $student->phone= $request->phone;

       $result= $student->save();
       if($request){
        return "student added";
       }else{
        return "student not added";

       }

       
    }
}
