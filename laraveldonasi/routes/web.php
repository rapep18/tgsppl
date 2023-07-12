<?php
// routes/web.php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetTokenController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\FailedJobController;
use App\Http\Controllers\PersonalAccessTokenController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\YayasanPantiAsuhanController;
use App\Http\Controllers\RiwayatPencairanDanaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ProvinsiController;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// Rute lainnya

Route::get('/provinsi', [ProvinsiController::class, 'index']);
Route::post('/provinsi', [ProvinsiController::class, 'store']);
Route::get('/provinsi/{id}', [ProvinsiController::class, 'show']);
Route::put('/provinsi/{id}', [ProvinsiController::class, 'update']);
Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy']);