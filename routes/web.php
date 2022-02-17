<?php

use App\Http\Controllers\PostController;
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
// Route::get('/posts',[PostController::class,"index"])->name('posts');
// Route::get('/posts/create',[PostController::class,"create"]);
// Route::post('/posts/{id}',[PostController::class,"update"]);



// Route::post('/posts/{id}',[PostController::class,"delete"]);

// Route::get('/posts/{id}',[PostController::class,"show"])->where('id', '[0-9]+')->name('posts.show');

// Route::get('/posts/{id}/edit',[PostController::class,"edit"])->where('id', '[0-9]+')->name('posts.edit');
// Route::post('/posts',[PostController::class,"store"]);

route::resource('posts',PostController::class);