<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Buat rout salam
Route::get('/salam', function () {
    return 'Selamat datang';
});


// Buat route nilai
Route::get('/nilai', function () {
    return view('nilai');
});

// Buat Route pasien
Route::get('/pasien', function () {
    return view('pasien');
});




