<?php

use illuminate\http\request;
use illuminate\support\facades\route;

/*
|--------------------------------------------------------------------------
| api routes
|--------------------------------------------------------------------------
|
| here is where you can register api routes for your application. these
| routes are loaded by the routeserviceprovider within a group which
| is assigned the "api" middleware group. enjoy building your api!
|
*/
/*
route::middleware('auth:sanctum')->get('/user', function (request $request) {
    return $request->user();
});
*/

route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('category.index');
route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])
    ->name('category.show');
route::post('/categories', [\App\Http\Controllers\CategoryController::class, 'store'])
    ->name('category.store');
route::put('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'update'])
    ->name('category.update');
route::delete('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])
    ->name('category.destroy');

route::get('/comments', [\App\Http\Controllers\CommentController::class, 'index'])
    ->name('comment.index');
route::get('/comments/{comment}', [\App\Http\Controllers\CommentController::class, 'show'])
    ->name('comment.show');
route::post('/comments', [\App\Http\Controllers\CommentController::class, 'store'])
    ->name('comment.store');
route::put('/comments/{comment}', [\App\Http\Controllers\CommentController::class, 'update'])
    ->name('comment.update');
route::delete('/comments/{comment}', [\App\Http\Controllers\CommentController::class, 'destroy'])
    ->name('comment.destroy');

route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])
    ->name('post.index');
route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])
    ->name('post.show');
route::post('/posts', [\App\Http\Controllers\PostController::class, 'store'])
    ->name('post.store');
route::put('/posts/{post}', [\App\Http\Controllers\PostController::class, 'update'])
    ->name('post.update');
route::delete('/posts/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])
    ->name('post.destroy');

route::get('/programratings', [\App\Http\Controllers\ProgramRatingController::class, 'index'])
    ->name('programrating.index');
route::get('/programratings/{programrating}', [\App\Http\Controllers\ProgramRatingController::class, 'show'])
    ->name('programrating.show');
route::post('/programratings', [\App\Http\Controllers\ProgramRatingController::class, 'store'])
    ->name('programrating.store');
route::put('/programratings/{programrating}', [\App\Http\Controllers\ProgramRatingController::class, 'update'])
    ->name('programrating.update');
route::delete('/programratings/{programrating}', [\App\Http\Controllers\ProgramRatingController::class, 'destroy'])
    ->name('programrating.destroy');

route::get('/threads', [\App\Http\Controllers\ThreadController::class, 'index'])
    ->name('threads.index');
route::get('/threads/{threads}', [\App\Http\Controllers\ThreadController::class, 'show'])
    ->name('threads.show');
route::post('/threads', [\App\Http\Controllers\ThreadController::class, 'store'])
    ->name('threads.store');
route::put('/threads/{threads}', [\App\Http\Controllers\ThreadController::class, 'update'])
    ->name('threads.update');
route::delete('/threads/{threads}', [\App\Http\Controllers\ThreadController::class, 'destroy'])
    ->name('threads.destroy');

route::get('/types', [\App\Http\Controllers\Typecontroller::class, 'index'])
    ->name('type.index');
route::get('/types/{type}', [\App\Http\Controllers\Typecontroller::class, 'show'])
    ->name('type.show');
route::post('/types', [\App\Http\Controllers\Typecontroller::class, 'store'])
    ->name('type.store');
route::put('/types/{type}', [\App\Http\Controllers\Typecontroller::class, 'update'])
    ->name('type.update');
route::delete('/types/{type}', [\App\Http\Controllers\Typecontroller::class, 'destroy'])
    ->name('type.destroy');

route::get('/programs', [\App\Http\Controllers\ProgramController::class, 'index'])
    ->name('program.index');
route::get('/programs/{program}', [\App\Http\Controllers\ProgramController::class, 'show'])
    ->name('program.show');
route::post('/programs', [\App\Http\Controllers\ProgramController::class, 'store'])
    ->name('program.store');
route::put('/programs/{program}', [\App\Http\Controllers\ProgramController::class, 'update'])
    ->name('program.update');
route::delete('/programs/{program}', [\App\Http\Controllers\ProgramController::class, 'destroy'])
    ->name('program.destroy');







