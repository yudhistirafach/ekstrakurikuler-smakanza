<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/forgot-password', function () {
        return view('pages.forgot-password');
    })->name('forgot-password');
    Route::get('/', function () {
        return view('pages.home');
    })->name('home');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/ekstrakurikuler', function () {
        return view('pages.ekstrakurikuler');
    })->name('ekstrakurikuler');
    Route::get('/berita', function () {
        return view('pages.berita');
    })->name('berita');
});
