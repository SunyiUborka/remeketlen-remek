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

route::get('/categories', [\app\http\controllers\CategoryController::class, 'index'])
    ->name('category.index');
route::get('/categories/{category}', [\app\http\controllers\CategoryController::class, 'show'])
    ->name('category.show');
route::post('/categories', [\app\http\controllers\CategoryController::class, 'store'])
    ->name('category.store');
route::put('/categories/{category}', [\app\http\controllers\CategoryController::class, 'update'])
    ->name('category.update');
route::delete('/categories/{category}', [\app\http\controllers\CategoryController::class, 'destroy'])
    ->name('category.destroy');

route::get('/comments', [\app\http\controllers\CommentController::class, 'index'])
    ->name('comment.index');
route::get('/comments/{comment}', [\app\http\controllers\CommentController::class, 'show'])
    ->name('comment.show');
route::post('/comments', [\app\http\controllers\CommentController::class, 'store'])
    ->name('comment.store');
route::put('/comments/{comment}', [\app\http\controllers\CommentController::class, 'update'])
    ->name('comment.update');
route::delete('/comments/{comment}', [\app\http\controllers\CommentController::class, 'destroy'])
    ->name('comment.destroy');

route::get('/posts', [\app\http\controllers\PostController::class, 'index'])
    ->name('post.index');
route::get('/posts/{post}', [\app\http\controllers\PostController::class, 'show'])
    ->name('post.show');
route::post('/posts', [\app\http\controllers\PostController::class, 'store'])
    ->name('post.store');
route::put('/posts/{post}', [\app\http\controllers\PostController::class, 'update'])
    ->name('post.update');
route::delete('/posts/{post}', [\app\http\controllers\PostController::class, 'destroy'])
    ->name('post.destroy');

route::get('/programratings', [\app\http\controllers\ProgramRatingController::class, 'index'])
    ->name('programrating.index');
route::get('/programratings/{programrating}', [\app\http\controllers\ProgramRatingController::class, 'show'])
    ->name('programrating.show');
route::post('/programratings', [\app\http\controllers\ProgramRatingController::class, 'store'])
    ->name('programrating.store');
route::put('/programratings/{programrating}', [\app\http\controllers\ProgramRatingController::class, 'update'])
    ->name('programrating.update');
route::delete('/programratings/{programrating}', [\app\http\controllers\ProgramRatingController::class, 'destroy'])
    ->name('programrating.destroy');

route::get('/threads', [\app\http\controllers\ThreadController::class, 'index'])
    ->name('threads.index');
route::get('/threads/{threads}', [\app\http\controllers\ThreadController::class, 'show'])
    ->name('threads.show');
route::post('/threads', [\app\http\controllers\ThreadController::class, 'store'])
    ->name('threads.store');
route::put('/threads/{threads}', [\app\http\controllers\ThreadController::class, 'update'])
    ->name('threads.update');
route::delete('/threads/{threads}', [\app\http\controllers\ThreadController::class, 'destroy'])
    ->name('threads.destroy');

route::get('/types', [\app\http\controllers\Typecontroller::class, 'index'])
    ->name('type.index');
route::get('/types/{type}', [\app\http\controllers\Typecontroller::class, 'show'])
    ->name('type.show');
route::post('/types', [\app\http\controllers\Typecontroller::class, 'store'])
    ->name('type.store');
route::put('/types/{type}', [\app\http\controllers\Typecontroller::class, 'update'])
    ->name('type.update');
route::delete('/types/{type}', [\app\http\controllers\Typecontroller::class, 'destroy'])
    ->name('type.destroy');

route::get('/programs', [\App\Http\Controllers\ProgramController::class, 'index'])
    ->name('program.index');
route::get('/programs/{program}', [\app\http\controllers\ProgramController::class, 'show'])
    ->name('program.show');
route::post('/programs', [\app\http\controllers\ProgramController::class, 'store'])
    ->name('program.store');
route::put('/programs/{program}', [\app\http\controllers\ProgramController::class, 'update'])
    ->name('program.update');
route::delete('/programs/{program}', [\app\http\controllers\ProgramController::class, 'destroy'])
    ->name('program.destroy');







