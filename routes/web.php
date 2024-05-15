<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});



Route::view('home','home');
Route::view('about','about');
Route::view('admin','admin.login');


Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about/{name}',[UserController::class,'userAbout']);
Route::get('admin-login',[UserController::class,'adminLogin']);


