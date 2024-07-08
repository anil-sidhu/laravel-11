<?php

use Illuminate\Support\Facades\Route;
Route::view("/test2","welcome");
Route::get("/test",function(){
    return "hello";
});


