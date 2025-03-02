<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // guest route
    Route::group(['middleware' => 'admin:guest'], function () {

        Route::get('/', fn() => redirect()->route('admin.login'));

        Route::get('login', [AuthController::class, 'create'])->name('login');
        Route::post('login', [AuthController::class, 'store']);

    });

    // auth Route
    Route::group(['middleware' => 'admin:auth'], function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::group(['prefix' => "account", 'as' => 'account.'], function () {

        });

        Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
            Route::get('/', [AccountController::class, 'index'])->name('index');
            Route::get('update', [AccountController::class, 'profile'])->name('update');
            Route::put('/update', [AccountController::class, 'profileUpdate']);
            Route::get('/password', [AccountController::class, 'password'])->name('password');
            Route::patch('/password', [AccountController::class, 'passwordUpdate']);
        });

        Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

    });

});
