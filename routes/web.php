<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;

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

// Route::post('/add-post', [App\Http\Controllers\PostController::class, 'add']);
// Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);
// Route::get('/edit-post/{post_id}', [App\Http\Controllers\PostController::class, 'edit']);
// Route::put('/update-post/{post_id}', [App\Http\Controllers\PostController::class, 'update'])->name('update-post');
// Route::get('/delete-post/{post_id}', [App\Http\Controllers\PostController::class, 'delete']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/add-student', [StudentController::class, 'create']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
Route::put('/update-student/{id}', [StudentController::class, 'update']);
Route::delete('/delete-student/{id}', [StudentController::class, 'destroy']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::post('/add-post', [PostController::class, 'store']);
Route::get('/edit-post/{post_id}', [PostController::class, 'edit']);
Route::put('/update-post/{post_id}', [PostController::class, 'update']);
Route::delete('/delete-post/{post_id}', [PostController::class, 'destroy']);