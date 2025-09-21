<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/',[LandingPageController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
