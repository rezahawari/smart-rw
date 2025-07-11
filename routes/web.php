<?php

use App\Http\Controllers\CalenderController;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/', function(){
    return redirect()->route('pengajuan');
})->name('home');

Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan');

Route::get('/calender', [CalenderController::class, 'home'])->name('kalender');

Route::get('/pengaduan', [PengaduanController::class, 'home'])->name('pengaduan');

Route::get('/cctv', [CctvController::class, 'index'])->name('cctv');

Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');

// Route::get('/pengaduan', [])
require __DIR__.'/auth.php';
