<?php

use App\Http\Controllers\DashboardAbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostContoller;
use App\Http\Controllers\DashboarHomeAbsensiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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



Route::get('/', [HomeController::class, 'absenindex']);
Route::get('/', [HomeController::class, 'index']);



Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/posts', [DashboardPostContoller::class, 'show'])->name('post.show');
Route::get('/dashboard/posts/create', [DashboardPostContoller::class, 'create'])->name('post.create');
Route::get('/dashboard/posts/edit/{id}', [DashboardPostContoller::class, 'edit'])->name('post.edit');
Route::post('/dashboard/posts', [DashboardPostContoller::class, 'store'])->name('post.store');
Route::put('/dashboard/posts/{post}', [DashboardPostContoller::class, 'update'])->name('post.update');
Route::delete('/dashboard/posts/{postid}/delete', [DashboardPostContoller::class, 'destroy'])->name('post.destroy');

Route::get('/dashboard/absens', [DashboardAbsensiController::class, 'show'])->name('absen.show');
Route::get('/dashboard/absens/create', [DashboardAbsensiController::class, 'create'])->name('absen.create');
Route::get('/dashboard/absens/edit/{id}', [DashboardAbsensiController::class, 'edit'])->name('absen.edit');
Route::post('/dashboard/absens', [DashboardAbsensiController::class, 'store'])->name('absen.store');
Route::put('/dashboard/absens/{absen}', [DashboardAbsensiController::class, 'update'])->name('absen.update');
Route::delete('/dashboard/absens/{postid}/delete', [DashboardAbsensiController::class, 'destroy'])->name('absen.destroy');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::resource('/dashboard/posts', DashboardPostContoller::class)->middleware('auth');
