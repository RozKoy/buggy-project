<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'guest.home.index')->name('home');
Route::view('utv-packages', 'guest.utv_packages.index')->name('utv-packages');
Route::view('activity-packages', 'guest.activity_packages.index')->name('activity-packages');
Route::view('gallery', 'guest.home.index')->name('gallery');
Route::view('about-us', 'guest.home.index')->name('about-us');
