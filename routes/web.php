<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;

/*
// Route dasar
Route::get('/surat-masuk', function () {
    return "Ini halaman surat masuk";
});

// Route dengan parameter
Route::get('/surat-masuk/{id}', function ($id) {
    return "Ini halaman surat masuk untuk id = " . $id ;
});

// Penamaan route
Route::get('/surat-masuk', function () {
    return "Ini halaman surat masuk";
})->name('surat-masuk.index');

Route::get('/surat-masuk/{id}', function ($id) {
    return "Ini halaman surat masuk untuk id = " . $id ;
})->name('surat-masuk.show');
*/

Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');

Route::get('/', function () {
    return view('welcome');
});
