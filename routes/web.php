<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',[UserController::class,'getUser']);
Route::get('about/{name}',[UserController::class,'aboutUser']);

Route::get('admin-login',[UserController::class,'adminLogin']);
