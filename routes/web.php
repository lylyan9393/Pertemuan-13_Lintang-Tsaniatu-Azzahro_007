<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Models\Anggota;


Route::get('/', function () {   //pertemuan 11
    return view('home');
})->name('home');

Route::get('/buku/search', [BukuController::class, 'search'])  // tugas 3
    ->name('buku.search');

Route::post('/buku/bulk-delete', [BukuController::class, 'bulkDelete'])     // tugas 2 pertemuan 12
    ->name('buku.bulk-delete');

Route::get('/buku/export', [BukuController::class, 'export'])    //Tugas 3 Pertemuan 12
     ->name('buku.export');

Route::resource('buku', BukuController::class);

Route::get('buku/kategori/{kategori}', [BukuController::class,'filterKategori'])
    ->name('buku.kategori');

Route::get('/anggota/export', [AnggotaController::class, 'export'])    //route export anggora tugas 2 pt 13
    ->name('anggota.export');

Route::get('/anggota/search', [AnggotaController::class, 'search'])
    ->name('anggota.search');

Route::resource('anggota', AnggotaController::class);

//=====================================
// Routes untuk Tugas pertemuan 11
//=====================================

Route::get('/dashboard', [DashboardController::class, 'index'])  // tugas 1
    ->name('dashboard');
