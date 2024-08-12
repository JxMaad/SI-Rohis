<?php

use App\Http\Controllers\Api\DokumentasiController;
use App\Http\Controllers\Api\KegiatanController;
use App\Http\Controllers\Api\UserController;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/daftar', []);

Route::post('/login', [App\Http\Controllers\Api\Auth\LoginController::class, 'index']);

Route::middleware('auth:api', 'setUserStatus')->group(function () {

    Route::post('/logout', [App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'semuaUser'])->middleware('permission:users.index');
        Route::post('/tambah', [UserController::class, 'tambahUser'])->middleware('permission:users.create');
        Route::post('/edit/{id}', [UserController::class, 'editUser'])->middleware('permission:users.edit');
        Route::get('/tampilkan/{id}', [UserController::class, 'tampilUser'])->middleware('permission:users.index');
        Route::delete('/hapus/{id}', [UserController::class, 'hapusUser'])->middleware('permission:users.delete');
    });

    Route::prefix('kegiatan')->group(function () {
        Route::get('/', [KegiatanController::class, 'semuaKegiatan'])->middleware('permission:kegiatan.index');
        Route::post('/tambah', [KegiatanController::class, 'tambahKegiatan'])->middleware('permission:kegiatan.create');
        Route::post('/edit/{id}', [KegiatanController::class, 'editKegiatan'])->middleware('permission:kegiatan.edit');
        Route::get('/tampilkan/{id}', [KegiatanController::class, 'tampilKegiatan'])->middleware('permission:kegiatan.index');
        Route::delete('/hapus/{id}', [KegiatanController::class, 'hapusKegiatan'])->middleware('permission:kegiatan.delete');
    });

    Route::prefix('dokumentasi')->group(function () {
        Route::get('/', [DokumentasiController::class, 'semuaDokumentasi'])->middleware('permission:dokumentasi.index');
        Route::post('/tambah', [DokumentasiController::class, 'tambahDokumentasi'])->middleware('permission:dokumentasi.create');
        Route::post('/edit/{id}', [DokumentasiController::class, 'editDokumentasi'])->middleware('permission:dokumentasi.edit');
        Route::get('/tampilkan/{id}', [DokumentasiController::class, 'tampilDokumentasi'])->middleware('permission:dokumentasi.index');
        Route::delete('/hapus/{id}', [DokumentasiController::class, 'hapusDokumentasi'])->middleware('permission:dokumentasi.delete');
    });
});
