<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

/** profile route */
Route::middleware('auth')->group(function (){
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('update/profile', [ProfileController::class, 'updateProfile'])->name('update.profile');

    Route::post('/insertBooks', [BookController::class, 'store'])->name('insertBooksForm');
    Route::POST('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/success', [BookController::class, 'success'])->name('successPage');
});

