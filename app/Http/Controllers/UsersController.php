<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function queries(){
        $response= DB::table('users')->get();
        // $response= DB::table('users')->where('phone','1234')->get();
        // $response= DB::table('users')->first();
        // $response=[$response];
//         $response= DB::table('users')->insert([
// 'name'=>'tony',
// 'email'=>'tony@test.com',
// 'phone'=>'1100'
//         ]);

//         if($response){
//             echo "data inserted";
//         }else{
//             echo 'data not inserted';
//         }

// $response= DB::table('users')->where('name','tony')->update(['phone'=>'112233']);
    
//             if($response){
//                 echo "data updated";
//             }else{
//                 echo 'data not updated';
//             }

// $response= DB::table('users')->where('name','tony')->delete();
    
//             if($response){
//                 echo "data deleted";
//             }else{
//                 echo 'data not deleted';
//             }

        return  view('users',['users'=>$response]);
    }
}
