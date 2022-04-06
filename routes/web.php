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
// route contact
// Route::get('/contact-me', function () {
//     return view('contact');
// });
Route::resource('projects', ProjectController::class);
Route::get('/serviceLists', function () {
    return view('serviceLists');
});
// route contact
Route::get('/partners', function () {
    return view('partners');
});
// backend contact from 
use App\Http\Controllers\backend_Controllers\ShowcontactController;
Route::resource('showcontact', ShowcontactController::class);
// backend contact from  end
// frontend contact form
use App\Http\Controllers\Controller;
Route::get('/contact', [App\Http\Controllers\backend_Controllers\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ App\Http\Controllers\backend_Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
// use App\Http\Controllers\newsletterController;
// Route::get('/home', [App\Http\Controllers\NewsletterfrondendController::class, 'createNewsletter']);
// Route::post('/home', [ App\Http\Controllers\NewsletterfrondendController::class, 'newsletterForm']);
// frontend contact form end
// back end newsletters form
use App\Http\Controllers\backend_Controllers\NewsletterController;
Route::resource('newsletter', NewsletterController::class);
// // back end newsletters form end