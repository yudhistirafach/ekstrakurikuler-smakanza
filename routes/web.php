<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/forgot-password', function () {
        return view('pages.forgot-password');
    })->name('forgot-password'); 
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/ekstrakurikuler', function () {
        return view('pages.ekstrakurikuler');
    })->name('ekstrakurikuler');
    Route::get('/prestasi', function () {
        return view('pages.prestasi');
    })->name('prestasi');
    Route::get('/berita', function () {
        return view('pages.berita');
    })->name('berita');

    Route::get('/ekstrakurikuler/detail', function () {
        return view('pages.detail-ekstrakurikuler');
    })->name('detail-ekstrakurikuler');

    Route::get('/daftar-ekstra', function () {
        return view('pages.daftar-ekstra');
    })->name('daftar-ekstra');

    Route::get('/admin/dashboard', function () {
        return view('pages.admin-dashboard.admin-dashboard');
    })->name('admin-dashboard');   
});

