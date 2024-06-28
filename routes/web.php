<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::view("/","welcome");

Route::view('add','add-student');

Route::post('add',[StudentController::class,'add']);

Route::get('list',[StudentController::class,'list']);

Route::get('delete/{id}',[StudentController::class,'delete']);

Route::get('edit/{id}',[StudentController::class,'edit']);

Route::put("edit-student/{id}",[StudentController::class,'editStudent']);

Route::get('search',[StudentController::class,'search']);

Route::post('delete-multi',[StudentController::class,'deleteMultiple']);