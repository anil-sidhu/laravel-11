<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('student')->group(function(){
    Route::view('/home','home');
    Route::get('/show',[Homecontroller::class,'show']);
    Route::get('/add',[Homecontroller::class,'add']);
});

Route::prefix('student/india')->group(function(){
    Route::view('/home','home');
    Route::get('/show',[Homecontroller::class,'show']);
    Route::get('/add',[Homecontroller::class,'add']);
});