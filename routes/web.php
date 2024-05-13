<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('home');
});
Route::view('/home','home');
Route::redirect('/home','/');


Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about',["name"=>$name]);
});

