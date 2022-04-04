<?php

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
use App\Http\Controllers\HomeController;
Route::resource('/', HomeController::class);
Route::resource('home', HomeController::class);

Route::get('/service-details', function () {
    return view('servicedetails');
});
// Route::get('/service-details', 'ServiceController@details');
Route::get('/articleList', function () {
    return view('articleList');
});
Route::get('/contact-me', function () {
    return view('contact');
});
use App\Http\Controllers\ProjectController;
Route::resource('projects', ProjectController::class);
