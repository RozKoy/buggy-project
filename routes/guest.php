<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('guest.home.index');
});
Route::get('/utv-packages', function () {
  return view('guest.utv_packages.index');
});
Route::get('/activity-packages', function () {
  return view('guest.activity_packages.index');
});
Route::get('/gallery', function () {
  return view('guest.home.index');
});
Route::get('/aboutus', function () {
  return view('guest.home.index');
});
