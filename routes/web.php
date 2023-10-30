<?php

use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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


Route::get('/register', [UserController::class,'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class,'register']);


// Login Route
Route::get('/login', [UserController::class,'showLoginForm'])->name('login');
Route::post('/login', [UserController::class,'authenticate']);

// Logout Route
Route::post('/logout', [LoginController::class,'logout'])->name('logout');


Route::get('/home',[UserController::class, 'main'])->name('home');






Route::get('/forgot-password', [UserController::class, 'showForgotPasswordForm'])->name('forgot-password');

Route::post('/forgot-password', [UserController::class, 'sendResetLink']);
