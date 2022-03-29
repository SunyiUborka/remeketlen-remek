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

// Regisztráció

Route::get("/register", [\App\Http\Controllers\RegisterController::class, "create"])
    ->name("register.create");
Route::post("/register", [\App\Http\Controllers\RegisterController::class, "store"])
    ->name("register.store");

// Bejelentkezés


Route::get("/login", [\App\Http\Controllers\AuthController::class, "login"])
    ->name("auth.login");
Route::post("/login", [\App\Http\Controllers\AuthController::class, "authenticate"])
    ->name("auth.authenticate");
Route::post("/logout", [\App\Http\Controllers\AuthController::class, "logout"])
    ->name("auth.logout");
