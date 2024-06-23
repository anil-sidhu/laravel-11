<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $request){
       $files= $request->file('files');
       $filesPath=[];
      foreach($files as $file)
      {
     $path=$file->store('public');
     $pathArray=explode("/",$path);
       array_push($filesPath,$pathArray[1]);
      }

      return view('display',['images'=>$filesPath]);

    }
}
