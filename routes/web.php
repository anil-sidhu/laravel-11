<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::view("/","welcome");



Route::view('upload','upload');
Route::post('upload',[ImageController::class,'upload']);
Route::get('list',[ImageController::class,'list']);

