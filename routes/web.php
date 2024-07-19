<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::view("/","welcome");

Route::get('send-email',[MailController::class,'sendEmail']);


