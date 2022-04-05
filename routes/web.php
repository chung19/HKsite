<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ServiceController;
use app\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('Home');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/service-details', [App\Http\Controllers\ServiceController::class , 'indexService'] );


// Route::get('/articleList', function () {
//     return view('articleList');
// });

Route::get('/articleList', [App\Http\Controllers\ArticleListController::class , 'index'] );

Route::get('/contact-me', function () {
    return view('contact');
});

Route::post('/add-category-post', [App\Http\Controllers\CategoryController::class, 'add']);
Route::get('/category-post', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/edit-category-post/{category_id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::post('/update-category-post', [App\Http\Controllers\CategoryController::class, 'update'])->name('update-category-post');
Route::get('/delete-category-post/{category_id}', [App\Http\Controllers\CategoryController::class, 'delete']);

Route::post('/add-post', [App\Http\Controllers\PostController::class, 'add']);
Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/edit-post/{post_id}', [App\Http\Controllers\PostController::class, 'edit']);
Route::post('/update-post', [App\Http\Controllers\PostController::class, 'update'])->name('update-post');
Route::get('/delete-post/{post_id}', [App\Http\Controllers\PostController::class, 'delete']);