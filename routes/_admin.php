<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TranslationAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;

Route::group([
//    'middleware' => ['auth'],//,'isAdmin'
    'prefix' => 'adminex',
    'as' => 'admin.'
], function () {

    Route::get('/', [AdminController::class, 'index'])->name('home');
//

    // Пользователи
    Route::resource('users', UserAdminController::class);
    // Мультиязычность
    Route::resource('/translations', TranslationAdminController::class);

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

    Route::get('/pricings', [PricingController::class, 'index'])->name('pricings.index');



});

