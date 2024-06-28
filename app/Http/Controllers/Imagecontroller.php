<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class Imagecontroller extends Controller
{
    //
    function upload(Request $request){
        $path = $request->file('file')->store('public');
        $pathArray= explode('/',$path);
        $imgPath= $pathArray[1];
        $image= new Image();
        $image->path=$imgPath;
       if($image->save()){
        return redirect('list');
       }

    }

    function list(){
        $imageData= Image::all();
        return view('display',['imageData'=>$imageData]);
    }
}
