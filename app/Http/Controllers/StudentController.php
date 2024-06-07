<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudents(){
        $students = \App\Models\Student::all();
        $data= new \App\Models\Student;
        echo $data->testFunction();
        return view('students',['data'=>$students]);
    }
}
