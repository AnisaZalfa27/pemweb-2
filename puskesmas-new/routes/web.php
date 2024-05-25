<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactContontroller;
use App\Http\Controllers\KelurahanController;


Route::get('/', function () {
    return view('Welcome');
});
Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/profile', function () {
    return "Halaman Profile";
});

Route::get('/salam', function () {
    return ('Selamat Datang zalfa di Laravel 11');
});



// Praktikum Laravel 2
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [AdminController::class, 'index']);
Route::get('/about', [AdminController::class, 'index']);

//praktikum laravel 3
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);