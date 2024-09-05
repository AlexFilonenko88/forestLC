<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use \App\Http\Controllers\Api\CategoryController;
use \App\Http\Controllers\Api\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\IsAdminMiddleware;

Route::post('login', [AuthController::class, 'login']);
Route::group([
    'middleware' => 'jwt.auth',
], function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});
Route::group([
    'middleware' => [
        'jwt.auth',
        IsAdminMiddleware::class,
    ],
], function () {
    Route::apiResource('posts', PostController::class);
});

//Route::get('/posts', [PostController::class, 'index']);
//Route::get('/posts/{posts}', [PostController::class, 'show']);
//Route::post('/posts', [PostController::class, 'store']);
//Route::patch('/posts/{posts}', [PostController::class, 'update']);
//Route::delete('/posts/{posts}', [PostController::class, 'destroy']);

Route::get('/tags', [TagController::class, 'index']); // index чтение список
Route::get('/tags/{tag}', [TagController::class, 'show']); // show чтение получение одного экземпляра
Route::post('/tags', [TagController::class, 'store']); // store создание
Route::patch('/tags/{tag}', [TagController::class, 'update']); // update обновление
Route::delete('/tags/{tag}', [TagController::class, 'destroy']); // destroy удаление

Route::get('/categorys', [CategoryController::class, 'index']); // index чтение список
Route::get('/categorys/{category}', [CategoryController::class, 'show']); // show чтение получение одного экземпляра
Route::post('/categorys', [CategoryController::class, 'store']); // store создание
Route::patch('/categorys/{category}', [CategoryController::class, 'update']); // update обновление
Route::delete('/categorys/{category}', [CategoryController::class, 'destroy']); // destroy удаление

Route::get('/comments', [CommentController::class, 'index']); // index чтение список
Route::get('/comments/{comment}', [CommentController::class, 'show']); // show чтение получение одного экземпляра
Route::post('/comments', [CommentController::class, 'store']); // store создание
Route::patch('/comments/{comment}', [CommentController::class, 'update']); // update обновление
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']); // destroy удаление

Route::get('/profiles', [ProfileController::class, 'index']); // index чтение список
Route::get('/profiles/{profile}', [ProfileController::class, 'show']); // show чтение получение одного экземпляра
Route::post('/profiles', [ProfileController::class, 'store']); // store создание
Route::patch('/profiles/{profile}', [ProfileController::class, 'update']); // update обновление
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy']); // destroy удаление
