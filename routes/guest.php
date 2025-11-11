<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('utv-packages', [LandingController::class, 'utv'])->name('utv-packages');
// Route::get('activity-packages', [LandingController::class, 'atv'])->name('activity-packages');
Route::get('detail/{id}', [LandingController::class, 'detail'])->name('detail');
Route::get('gallery', [LandingController::class, 'gallery'])->name('gallery');
Route::view('about-us', 'guest.about_us.index')->name('about-us');
Route::view('find-us', 'guest.find_us.index')->name('find-us');
