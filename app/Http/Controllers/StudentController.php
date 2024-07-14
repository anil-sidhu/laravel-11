<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function list(){
        return Student::all();
    }

    function save(){
       $student= new Student();
       $student->name="tony";
       $student->phone="3333";
       $student->email="bruce@test.com";

       if($student->save()){
        echo "new student added";
       }


    }


}
