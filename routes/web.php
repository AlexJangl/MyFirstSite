<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
require ('_admin.php');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');
Route::get('/contact', [HomeController::class, 'contact'])
    -> name('contact');
Route::get('/abouts', [AboutController::class, 'index'])
    -> name('abouts');
Route::resource('/service', ServiceController::class);
Route::resource('/pricings', PricingController::class);
Route::resource('/blogs', BlogController::class);
Route::resource('/videos', VideoController::class);
