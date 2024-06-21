<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('about/{lang}',function($lang){
    App::setlocale($lang);
    return view('about');
});