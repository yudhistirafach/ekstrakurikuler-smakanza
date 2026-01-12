<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExtracurricularsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/ekstrakurikuler', [ExtracurricularsController::class, 'index'])->name('ekstrakurikuler');
Route::get('/ekstrakurikuler/{slug}', [ExtracurricularsController::class, 'show'])->name('ekstrakurikuler.detail');

Route::get('/prestasi', [AchievementController::class, 'index'])->name('prestasi');
Route::get('/prestasi/{slug}', [AchievementController::class, 'show'])->name('prestasi.detail');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/forgot-password', function () {
        return view('pages.forgot-password');
    })->name('forgot-password'); 
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/daftar-ekstra', function () {
        return view('pages.daftar-ekstra');
    })->name('daftar-ekstra');

    Route::get('/admin/dashboard', function () {
        return view('pages.admin-dashboard.admin-dashboard');
    })->name('admin-dashboard');   

    Route::get('/profile', function () {
        return view('pages.student-profile');
    })->name('profile');
});

