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
       return redirect('list');
        
       }else{
        return "student not added";

       }
 
    }

    function list(){
        $studentData = Student::all();
        return view('list-student',['students'=>$studentData]);

    }

    function delete($id){
         $isDelete= Student::destroy($id);
        if($isDelete){
            return redirect('list');
        }else{
            echo "record not deleted";
        }
    }

    function edit($id){
       $student= Student::find($id);
       return view('edit-student',["data"=>$student]);
    }


    function editStudent(Request $request, $id){
        $student= Student::find($id);
         $student->name=$request->name;
         $student->email=$request->email;
         $student->phone=$request->phone;
        
         if($student->save()){
            return redirect('list');
         }else{
            return "Student details are not updated";
         }

    }

    function search(Request $request){
        $studentData= Student::where('name','like',"%$request->search%")->get();
        return view('list-student',['students'=>$studentData,'search'=>$request->search]);
    }
}
