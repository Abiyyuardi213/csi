<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLinkRequestForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);

    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    // Master Data Routes
    Route::prefix('master')->group(function () {
        Route::resource('locations', \App\Http\Controllers\LocationController::class);
        Route::resource('equipment', \App\Http\Controllers\EquipmentController::class);
        Route::resource('materials', \App\Http\Controllers\MaterialController::class);
        Route::resource('employees', \App\Http\Controllers\EmployeeController::class);
    });
});
