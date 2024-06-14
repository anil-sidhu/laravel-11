<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('user',[UserController::class,'get']);
Route::post('user',[UserController::class,'post']);
Route::put('user',[UserController::class,'put']);
Route::delete('user',[UserController::class,'delete']);




Route::view('form','user');