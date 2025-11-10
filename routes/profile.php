<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
