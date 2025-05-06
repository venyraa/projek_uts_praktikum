<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/login', [PageController::class, 'loginForm'])->name('login');
Route::post('/login', [PageController::class, 'login'])->name('login.post');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/produk/tambah', [PageController::class, 'tambahProduk'])->name('produk.tambah');
Route::post('/produk/simpan', [PageController::class, 'simpanProduk'])->name('produk.simpan');
Route::get('/produk/edit/{id}', [PageController::class, 'editProduk'])->name('produk.edit');
Route::post('/produk/update/{id}', [PageController::class, 'updateProduk'])->name('produk.update');
Route::get('/produk/hapus/{id}', [PageController::class, 'hapusProduk'])->name('produk.hapus');
Route::get('/produk/{id}/detail', [PageController::class, 'detailProduk'])->name('produk.detail');
Route::post('/logout', function () {
    session()->forget('username');
    return redirect()->route('login');
})->name('logout');
