<?php

// use App\Http\Controllers\BuggyPackages\ATVController;
use App\Http\Controllers\BuggyPackages\UTVController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('utv')->group(function () {
        Route::get('/', [UTVController::class, 'index'])->name('admin.utv.index');
        Route::get('/create', [UTVController::class, 'create'])->name('admin.utv.create');
        Route::post('/create', [UTVController::class, 'store'])->name('admin.utv.store');
        Route::get('/edit/{id}', [UTVController::class, 'edit'])->name('admin.utv.edit');
        Route::post('/edit/{id}', [UTVController::class, 'update'])->name('admin.utv.update');
        Route::delete('/delete/{id}', [UTVController::class, 'destroy'])->name('admin.utv.destroy');
    });
    // Route::prefix('atv')->group(function () {
    //     Route::get('/', [ATVController::class, 'index'])->name('admin.atv.index');
    //     Route::get('/create', [ATVController::class, 'create'])->name('admin.atv.create');
    //     Route::post('/create', [ATVController::class, 'store'])->name('admin.atv.store');
    //     Route::get('/edit/{id}', [ATVController::class, 'edit'])->name('admin.atv.edit');
    //     Route::post('/edit/{id}', [ATVController::class, 'update'])->name('admin.atv.update');
    //     Route::delete('/delete/{id}', [ATVController::class, 'destroy'])->name('admin.atv.destroy');
    // });
});
