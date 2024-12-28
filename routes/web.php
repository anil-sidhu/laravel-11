<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::view("/","welcome");

Route::post('send-email',[MailController::class,'sendEmail']);
Route::view('send-email','send-email');


