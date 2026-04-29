<?php

declare(strict_types=1);

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Profile\TimezoneController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

// new routes
Route::view('/terms', 'terms')->name('terms');
Route::view('/version', 'version')->name('version');

