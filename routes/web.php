<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;


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

Route::resource('/', HomeController::class);
Route::resource('home', HomeController::class);

Route::get('/service-details', function () {
    return view('servicedetails');
});
Route::get('/articleList', function () {
    return view('articleList');
});
Route::get('/contact-me', function () {
    return view('contact');
});
Route::get('/serviceLists', function () {
    return view('serviceLists');
});
Route::get('/partners', function () {
    return view('partners');
});

Route::resource('projects', ProjectController::class);
Route::resource('back-end', DashboardController::class);
Route::resource('team',TeamController::class);
Route::resource('blog', BlogController::class);
