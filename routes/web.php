<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard.index');
        })->name('dashboard');
        require __DIR__ . '/profile.php';
        require __DIR__ . '/buggy-packages.php';
        require __DIR__ . '/gallery.php';
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/guest.php';
