<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});



Route::post('add',[UserController::class,'addUser']);
Route::view('user','user');