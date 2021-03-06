<?php

use App\Http\Controllers\UserController;
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
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'findAllUser']);
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'registerPost']);
    Route::get('/find/{id}', [UserController::class, 'findUserById']);
    Route::get('/delete/{id}', [UserController::class, 'deleteUser']);
});

Route::prefix('post')->group(function () {
    Route::get('/', [PostController::class, 'findPosts']);
    Route::get('/create', [PostController::class, 'create']);
    Route::post('/create', [PostController::class, 'createPost']);
    Route::get('/find/{id}', [PostController::class, 'findPostById']);
    Route::get('/delete/{id}', [PostController::class, 'deletePost']);
});




