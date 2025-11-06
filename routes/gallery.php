<?php

use App\Http\Controllers\BuggyPackages\ATVController;
use App\Http\Controllers\BuggyPackages\UTVController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('admin.gallery.index');        
        Route::post('/create', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    });
});