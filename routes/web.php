<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProfileContriller;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostController::class);
//Route::get('/posts',  [PostController::class, 'index']); // index чтение список
//Route::get('/posts/{post}/show', [PostController::class, 'show']); // show чтение получение одного экземпляра
//Route::get('/posts/store', [PostController::class, 'store']); // store создание
//Route::get('/posts/update', [PostController::class, 'update']); // update обновление
//Route::get('/posts/destroy', [PostController::class, 'destroy']); // destroy удаление

Route::get('/tags',  [TagController::class, 'index']); // index чтение список
Route::get('/tags/{tag}/show', [TagController::class, 'show']); // show чтение получение одного экземпляра
Route::get('/tags/store', [TagController::class, 'store']); // store создание
Route::get('/tags/update', [TagController::class, 'update']); // update обновление
Route::get('/tags/destroy', [TagController::class, 'destroy']); // destroy удаление

Route::get('/comments',  [CommentsController::class, 'index']); // index чтение список
Route::get('/comments/show', [CommentsController::class, 'show']); // show чтение получение одного экземпляра
Route::get('/comments/store', [CommentsController::class, 'store']); // store создание
Route::get('/comments/{comment}/update', [CommentsController::class, 'update']); // update обновление
Route::get('/comments/destroy', [CommentsController::class, 'destroy']); // destroy удаление

Route::get('/categorys',  [CategoryController::class, 'index']); // index чтение список
Route::get('/categorys/show', [CategoryController::class, 'show']); // show чтение получение одного экземпляра
Route::get('/categorys/store', [CategoryController::class, 'store']); // store создание
Route::get('/categorys/{category}/update', [CategoryController::class, 'update']); // update обновление
Route::get('/categorys/{category}/destroy', [CategoryController::class, 'destroy']); // destroy удаление

Route::get('/profiles',  [ProfileContriller::class, 'index']); // index чтение список
Route::get('/profiles/show', [ProfileContriller::class, 'show']); // show чтение получение одного экземпляра
Route::get('/profiles/{profile}/store', [ProfileContriller::class, 'store']); // store создание
Route::get('/profiles/{profile}/update', [ProfileContriller::class, 'update']); // update обновление
Route::get('/profiles/{profile}/destroy', [ProfileContriller::class, 'destroy']); // destroy удаление
