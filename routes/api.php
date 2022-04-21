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

Route::get('/categories', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('category.index');
Route::get('/categories/{category}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('category.show');
Route::post('/categories', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('category.store');
Route::put('/categories/{category}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('category.update');
Route::delete('/categories/{category}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('category.destroy');

Route::get('/comments', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('comment.index');
Route::get('/comments/{comment}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('comment.show');
Route::post('/comments', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('comment.store');
Route::put('/comments/{comment}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('comment.update');
Route::delete('/comments/{comment}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('comment.destroy');

Route::get('/posts', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('post.index');
Route::get('/posts/{post}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('post.show');
Route::post('/posts', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('post.store');
Route::put('/posts/{post}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('post.update');
Route::delete('/posts/{post}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('post.destroy');

Route::get('/programratings', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('programrating.index');
Route::get('/programratings/{programrating}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('programrating.show');
Route::post('/programratings', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('programrating.store');
Route::put('/programratings/{programrating}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('programrating.update');
Route::delete('/programratings/{programrating}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('programrating.destroy');

Route::get('/Threads', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('Thread.index');
Route::get('/Threads/{Thread}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('Thread.show');
Route::post('/Threads', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('Thread.store');
Route::put('/Threads/{Thread}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('Thread.update');
Route::delete('/Threads/{Thread}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('Thread.destroy');

Route::get('/types', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('type.index');
Route::get('/types/{type}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('type.show');
Route::post('/types', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('type.store');
Route::put('/types/{type}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('type.update');
Route::delete('/types/{type}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('type.destroy');


Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('user.index');
Route::get('/users/{user}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('user.show');
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('user.store');
Route::put('/users/{user}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('user.update');
Route::delete('/users/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('user.destroy');

Route::get('/versions', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('version.index');
Route::get('/versions/{version}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('version.show');
Route::post('/versions', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('version.store');
Route::put('/versions/{version}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('version.update');
Route::delete('/versions/{version}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('version.destroy');

Route::get('/programs', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('program.index');
Route::get('/programs/{program}', [\App\Http\Controllers\UserController::class, 'show'])
    ->name('program.show');
Route::post('/programs', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('program.store');
Route::put('/programs/{program}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('program.update');
Route::delete('/programs/{program}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('program.destroy');







