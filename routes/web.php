<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
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


Route::resource('back-end', DashboardController::class);
Route::resource('reviews',ReviewController::class);
Route::resource('services',ServiceController::class);
Route::resource('service-details',ServiceDetailController::class);
Route::resource('home',HomeController::class);
Route::resource('/',HomeController::class);

