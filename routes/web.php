<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/forms/contact', function () {
    return view('forms.contact');
});

Route::get('/forms/newsletter', function () {
    return view('forms.newsletter');
});

//Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

//Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
    Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);
    Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'destroy']);
    Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('mahasiswa.destroy');
});
