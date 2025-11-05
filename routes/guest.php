<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'guest.home.index')->name('home');
Route::view('utv-packages', 'guest.utv_packages.index')->name('utv-packages');
Route::view('activity-packages', 'guest.activity_packages.index')->name('activity-packages');
Route::view('gallery', 'guest.galleries.index')->name('gallery');
Route::view('about-us', 'guest.about_us.index')->name('about-us');
Route::view('find-us', 'guest.find_us.index')->name('find-us');
