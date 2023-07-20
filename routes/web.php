<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Providers\RouteServiceProvider;


    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();
    Route::get('/home', [HomeController::class, 'index']);
