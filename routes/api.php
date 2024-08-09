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
        Route::get('/', [KegiatanController::class, 'semuaUser'])->middleware('permission:users.index');
        Route::post('/tambah', [KegiatanController::class, 'tambahUser'])->middleware('permission:users.create');
        Route::post('/edit/{id}', [KegiatanController::class, 'editUser'])->middleware('permission:users.edit');
        Route::get('/tampilkan/{id}', [KegiatanController::class, 'tampilUser'])->middleware('permission:users.index');
        Route::delete('/hapus/{id}', [KegiatanController::class, 'hapusUser'])->middleware('permission:users.delete');
    });

    Route::prefix('dokumentasi')->group(function () {
        Route::get('/', [DokumentasiController::class, 'semuaUser'])->middleware('permission:users.index');
        Route::post('/tambah', [DokumentasiController::class, 'tambahUser'])->middleware('permission:users.create');
        Route::post('/edit/{id}', [DokumentasiController::class, 'editUser'])->middleware('permission:users.edit');
        Route::get('/tampilkan/{id}', [DokumentasiController::class, 'tampilUser'])->middleware('permission:users.index');
        Route::delete('/hapus/{id}', [DokumentasiController::class, 'hapusUser'])->middleware('permission:users.delete');
    });
});
