<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\LoginController;

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


Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('/todos', TodoController::class)->only([
        'index', 'store', 'destroy'
    ]);

});
