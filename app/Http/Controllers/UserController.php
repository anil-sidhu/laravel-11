<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function queries(){
        // $response =User::get();
        // $response =User::all();

        // $response =User::where('phone','1234')->get();
        // $response =User::first();
        // $response =User::find(1);

        // $response=[$response];

        // $response =User::insert([
        //     'name'=>'kay',
        //     'email'=>'kay@tets.com',
        //     'phone'=>'0101'
        // ]);
        // if($response){
        //     return "data inserted";
        // }else{
        //     return "data not inserted";
        // }

        // $response =User::where('name','kay')->update(['phone'=>'112299']);
        // if($response){
        //     return "data update";
        // }else{
        //     return "data not update";
        // }

        $response =User::where('name','kay')->delete();
        if($response){
            return "data deleted";
        }else{
            return "data not deleted";
        }


        return view('user',['users'=>$response]);
    }
}
