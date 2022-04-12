<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/', [\App\Http\Controllers\ProgramController::class, 'index'])->name('dosearch.index');
Route::get('/programs/{id}', [\App\Http\Controllers\ProgramController::class, 'view'])->name('dosearch.view');
Route::post('/programs', [\App\Http\Controllers\ProgramController::class, 'store'])->name('dosearch.store');







