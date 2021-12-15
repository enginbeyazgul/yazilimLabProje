<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AppController::class, 'index'])->name('ogrenci');
Route::get('/ogrenci', [\App\Http\Controllers\OgrenciGirisController::class,'ogreciGiris'])->name('ogrenci');
Route::get('/admin', [\App\Http\Controllers\AdminGirisController::class, 'adminGiris'])->name('admin');
Route::get('/ogrencikayit', [\App\Http\Controllers\OgrenciKayitController::class, 'ogrenciKayit'])->name('ogrencikayit');
Route::get('/ogrencimain', [\App\Http\Controllers\OgrenciMainController::class,'ogrenciMain'])->middleware('studentcontrol')->name('ogrencimain');
Route::get('/ogrencimain/yazokulu', [\App\Http\Controllers\YazOkuluController::class, 'yazOkulu'])->name('ogrencimain/yazokulu');
Route::get('/ogrencimain/yataygecis', [\App\Http\Controllers\YatayGecisController::class, 'yatayGecis'])->name('ogrencimain/yataygecis');
Route::get('/ogrencimain/dgs', [\App\Http\Controllers\DgsController::class, 'dgs'])->name('ogrencimain/dgs');
Route::get('/ogrencimain/cap', [\App\Http\Controllers\CapController::class, 'cap'])->name('ogrencimain/cap');
Route::get('/ogrencimain/intibak', [\App\Http\Controllers\IntibakController::class, 'intibak'])->name('ogrencimain/intibak');
Route::get('/ogrencimain/bekleyen', [\App\Http\Controllers\BasvuruDurumController::class, 'bekleyen'])->name('ogrencimain/bekleyen');
Route::get('/ogrencimain/onaylanan', [\App\Http\Controllers\BasvuruDurumController::class, 'onaylanan'])->name('ogrencimain/onaylanan');
Route::get('/ogrencimain/reddedilen', [\App\Http\Controllers\BasvuruDurumController::class, 'reddedilen'])->name('ogrencimain/reddedilen');
Route::post('/ogrencimain', [\App\Http\Controllers\OgrenciMainController::class,'ogrenciControl'])->name('ogrencimain');
Route::post('/ogrencikayitet', [\App\Http\Controllers\OgrenciKayitEtController::class, 'ogrenciKayitEt'])->middleware('registercontrol')->name('ogrencikayitet');
Route::post('/ogrencimain/yazokulu', [\App\Http\Controllers\YazOkuluController::class, 'yazOkuluBasvuru'])->middleware('yazokulucontrol')->name('ogrencimain/yazokulu');
Route::post('/ogrencimain/yataygecis', [\App\Http\Controllers\YatayGecisController::class, 'yatayGecisBasvuru'])->middleware('yataygeciscontrol')->name('ogrencimain/yataygecis');
Route::post('/ogrencimain/dgs', [\App\Http\Controllers\DgsController::class, 'dgsBasvuru'])->middleware('dgscontrol')->name('ogrencimain/dgs');
Route::post('/ogrencimain/cap', [\App\Http\Controllers\CapController::class, 'capBasvuru'])->middleware('capcontrol')->name('ogrencimain/cap');
Route::post('/ogrencimain/intibak', [\App\Http\Controllers\IntibakController::class, 'intibakBasvuru'])->middleware('intibakcontrol')->name('ogrencimain/intibak');
