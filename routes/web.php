<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});


Route::view('login','login');
Route::view('profile','profile');


Route::post('login',[UserController::class,'login']);
Route::get('logout',[UserController::class,'logout']);

