<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "List of student";
    }
    function add(){
        return "Student added";
    }
    function delete(){
        return "student deleted";
    }
    function about($name){
        return $name;
    }
}
