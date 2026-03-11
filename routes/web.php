<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController; // <--- Tambahkan ini
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']); // <--- Tambahkan ini
Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route untuk Ubah Data (Langkah 12 & 15)
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

// Route untuk Hapus Data (Langkah 18)
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
