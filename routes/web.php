<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']) -> name('home');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact']) -> name('contact');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']) -> name('about');
Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index']) -> name('service');
Route::get('/pricing', [\App\Http\Controllers\PricingController::class, 'index']) -> name('pricing');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']) -> name('blog');
