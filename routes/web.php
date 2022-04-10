<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend_Controllers\ShowcontactController;
use App\Http\Controllers\backend_Controllers\NewsletterController;
use App\Http\Controllers\backend_Controllers\ContactController;
use App\Http\Controllers\backend_Controllers\PhotoController;
/*

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
// ----------------------------------frontend-----------------------------
Route::resource('/', HomeController::class);

Route::resource('home', HomeController::class);
Route::get('/service-details', [App\Http\Controllers\ServiceController::class , 'indexService'] );
Route::get('/articleList', [App\Http\Controllers\ArticleListController::class , 'index'] );
Route::resource('contact', ContactController::class);
Route::get('/contact', function () {
    return view('frontend/contact');
});
Route::get('/home', function () {
    return view('frontend/home');
});
Route::get('/serviceLists', function () {
Route::resource('reviews',ReviewController::class);
Route::resource('reviews',ReviewController::class);
    return view('frontend/serviceLists');
});
Route::get('/partners', function () {
    return view('frontend/partners');
});
Route::resource('newsletters', NewsletterController::class);

// frontend contact form
Route::get('/contact', [App\Http\Controllers\backend_Controllers\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ App\Http\Controllers\backend_Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/home', [App\Http\Controllers\NewsletterfrondendController::class, 'createNewsletter']);
Route::post('/home', [ App\Http\Controllers\NewsletterfrondendController::class, 'NewsletterForm'])->name('sms.store');

// ----------------------------------backend-----------------------------
Route::resource('back-end', DashboardController::class);
Route::resource('projects', ProjectController::class);
Route::resource('reviews',ReviewController::class);
Route::resource('team',TeamController::class);
Route::resource('blog', BlogController::class);
Route::resource('services',ServiceController::class);
Route::resource('service-details',ServiceDetailController::class);
Route::resource('showcontacts', ShowcontactController::class);
// Route::resource('newsletters', NewsletterController::class);
Route::resource('gallerys', PhotoController::class);





Route::post('/add-category-post', [App\Http\Controllers\CategoryController::class, 'add']);
Route::get('/category-post', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/edit-category-post/{category_id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::post('/update-category-post', [App\Http\Controllers\CategoryController::class, 'update'])->name('update-category-post');
Route::get('/delete-category-post/{category_id}', [App\Http\Controllers\CategoryController::class, 'delete']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::post('/add-post', [PostController::class, 'store']);
Route::get('/edit-post/{post_id}', [PostController::class, 'edit']);
Route::put('/update-post/{post_id}', [PostController::class, 'update']);
Route::delete('/delete-post/{post_id}', [PostController::class, 'destroy']);


