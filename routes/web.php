<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\TutorialsController;


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

Route::get('/', [BlogController::class, 'index']);
// Route::get('/classes/{slug}', [ClassesController::class, 'show']);

Route::resource('/articles', ArticlesController::class);
Route::get('/articles/{slug}', [ArticlesController::class, 'show']);

Route::resource('/tutorials', TutorialsController::class);
Route::get('/tutorials/{slug}', [TutorialsController::class, 'show']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category', CategoryController::class);
    Route::resource('/tags', TagsController::class);
    Route::get('/posts/trash', [PostsController::class, 'trash']);
    Route::get('/posts/restore/{id}', [PostsController::class, 'restore']);
    Route::delete('/posts/kill/{id}', [PostsController::class, 'kill']);
    Route::resource('/posts', PostsController::class);
    Route::resource('/users', UsersController::class);
    Route::get('/classes/trash', [ClassesController::class, 'trash']);
    Route::get('/classes/restore/{id}', [ClassesController::class, 'restore']);
    Route::delete('/classes/kill/{id}', [ClassesController::class, 'kill']);
    Route::resource('/classes', ClassesController::class);
    Route::resource('/modules', ModulesController::class);
});



Route::get('/profile', function () {
    return view('profile.index');
});
