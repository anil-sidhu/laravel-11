<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::view("/","welcome");
Route::view('upload','upload');

Route::post('upload',[UploadController::class,'upload']);
