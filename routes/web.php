<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\DonaturController;
    
    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/donatur', [DonaturController::Class, 'create']);
    Route::get('/donatur/index', [DonaturController::Class, 'index']);
    Route::post('/donatur/store', [DonaturController::Class, 'store']);
    Route::get('/donatur/edit', [DonaturController::Class, 'store']);