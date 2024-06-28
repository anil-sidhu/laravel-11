<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Imagecontroller;

Route::view("/","welcome");


Route::view('upload','upload');
Route::post('upload',[Imagecontroller::class,'upload']);
Route::get('list',[Imagecontroller::class,'list']);


