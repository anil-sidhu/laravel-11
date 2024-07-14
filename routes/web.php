<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::view("/","welcome");

Route::get('list',[StudentController::class,'list']);
Route::get('save',[StudentController::class,'save']);




