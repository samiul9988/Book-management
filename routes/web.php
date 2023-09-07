<?php

use App\Http\Controllers\BookPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//    Route::get('/books', [BookController::class, 'index'])->name('books.index');
//    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
//    Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');

    Route::resource('books', BookController::class);
    Route::resource('bookpages', BookPageController::class);

//
    Route::post('/insertBooks', [BookController::class, 'store'])->name('insertBooksForm');
    Route::post('/save-draft', [BookController::class, 'saveDraft'])->name('save-draft');


    Route::get('/addbook', [BookController::class, 'bookadd'])->name('addbook');
    Route::get('/admindashboard', [BookController::class, 'admindashboard'])->name('admindashboard');
    Route::get('/dashboardadmin', [AdminController::class, 'show'])->name('dashboardadmin');
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/managebook', [BookController::class, 'bookmanage'])->name('managebook');


    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');









