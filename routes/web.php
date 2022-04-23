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

Route::get('/home', [\App\Http\Controllers\SiteController::class, 'home'])->name('dosearch.home');
Route::get('/show/{id}', [\App\Http\Controllers\SiteController::class, 'show'])->name('dosearch.show');
Route::get('/feltolt', [\App\Http\Controllers\SiteController::class, 'upload'])->name('dosearch.upload');
Route::get('/forum', [\App\Http\Controllers\SiteController::class, 'forum'])->name('dosearch.forum');
Route::get('/datasheet', [\App\Http\Controllers\SiteController::class, 'datasheet'])->name('dosearch.datasheet');


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
