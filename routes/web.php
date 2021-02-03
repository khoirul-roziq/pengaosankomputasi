<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;


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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category',CategoryController::class);
    Route::resource('/tags',TagsController::class);
    Route::get('/posts/trash', [PostsController::class, 'trash']);
    Route::get('/posts/restore/{id}', [PostsController::class, 'restore']);
    Route::delete('/posts/kill/{id}', [PostsController::class, 'kill']);
    Route::resource('/posts',PostsController::class);
    Route::resource('/users',UsersController::class);
});

