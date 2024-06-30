<?php

use Illuminate\Support\Facades\Route;
Route::view("/","welcome");

Route::view('home','home');
Route::view('about','about');
Route::view('login','login');



Route::view('admin','admin');