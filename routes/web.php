<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the
| "web" middleware group. Make something great!
|
*/

// Authentication routes
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/requests', [App\Http\Controllers\HomeController::class, 'index'])->name('requests');
    Route::get('/users', [App\Http\Controllers\HomeController::class, 'index'])->name('users');
    Route::get('/home', function () {
        return Redirect::to('/');
    })->name('home');

    Route::post('/upload-csv', [App\Http\Controllers\AccountController::class, 'upload'])->name('upload.csv');
});
