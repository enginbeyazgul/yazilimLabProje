<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AppController::class, 'index'])->name('ogrenci');
Route::get('/ogrenci', [\App\Http\Controllers\OgrenciGirisController::class,'ogreciGiris'])->name('ogrenci');
Route::get('/admin', [\App\Http\Controllers\AdminGirisController::class, 'adminGiris'])->name('admin');
Route::get('/ogrencikayit', [\App\Http\Controllers\OgrenciKayitController::class, 'ogrenciKayit'])->name('ogrenciKayit');
