<?php

use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

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

// authentication
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/registerPost', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/explore', [HomeController::class, 'explore'])->name('explore');


Route::middleware(['auth'])->group(function () {
    Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
    Route::get('/post/create', [HomeController::class, 'beranda'])->name('post.create');
    Route::get('/bookmarks', [HomeController::class, 'bookmarks'])->name('bookmarks');
});
