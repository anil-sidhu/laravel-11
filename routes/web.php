<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::view("/","welcome");

Route::get('list',[SellerController::class,'list']);

