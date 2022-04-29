<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name('home');

// Oldalak

Route::get('/home', [\App\Http\Controllers\SiteController::class, 'home'])
    ->name('dosarc.home');

Route::get('/show/{program}', [\App\Http\Controllers\SiteController::class, 'show'])
    ->name('dosarc.show');

Route::get('/forum', [\App\Http\Controllers\SiteController::class, 'forum'])
    ->name('dosarc.forum');

Route::get('/profile', [\App\Http\Controllers\SiteController::class, 'profile'])
    ->name('user.show');

Route::put('/profile/image', [\App\Http\Controllers\UserController::class, 'updateImage'])
    ->name('user.update-image');

Route::put('/profile/password', [\App\Http\Controllers\UserController::class, 'updatePassword'])
    ->name('user.update-password');

Route::get('/upload', [\App\Http\Controllers\SiteController::class, 'upload'])
    ->name('dosarc.upload');

Route::post('/dosarc', [\App\Http\Controllers\ProgramController::class, 'store'])
    ->name('dosarc.store');

Route::get('/dosarc/profile', [\App\Http\Controllers\SiteController::class, 'profile'])
    ->name('dosarc.profile');

// Regisztráció

Route::get("/register", [\App\Http\Controllers\RegisterController::class, "create"])
    ->name("register.create");
Route::post("/register", [\App\Http\Controllers\RegisterController::class, "store"])
    ->name("register.store");

// Bejelentkezés

Route::post("/login", [\App\Http\Controllers\AuthController::class, "authenticate"])
    ->name("auth.authenticate");
Route::post("/logout", [\App\Http\Controllers\AuthController::class, "logout"])
    ->name("auth.logout");
