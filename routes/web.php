<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ArticleListController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\NewsletterfrondendControllerController;
use App\Http\Controllers\Frontend\ServiceDetailController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\newsletterController;
use App\Http\Controllers\Backend\PhotoController;
use App\Http\Controllers\Backend\ShowcontactController;
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
Route::get('/service-details', [App\Http\Controllers\Backend\ServiceController::class , 'indexService'] );
Route::resource('articleList',ArticleListController::class);
Route::resource('contact', ContactController::class);
Route::get('serviceLists', function () {
    return view('frontend/serviceLists');
});
Route::get('partners', function () {
    return view('frontend/partners');
});





// ----------------------------------backend-----------------------------
Route::resource('admin', DashboardController::class);
Route::resource('projects', ProjectController::class);
Route::resource('reviews',ReviewController::class);
Route::resource('team',TeamController::class);
Route::resource('blog', BlogController::class);
Route::resource('services',ServiceController::class);
Route::resource('service-details',ServiceDetailController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::post('/add-post', [PostController::class, 'store']);
Route::get('/edit-post/{post_id}', [PostController::class, 'edit']);
Route::put('/update-post/{post_id}', [PostController::class, 'update']);
Route::delete('/delete-post/{post_id}', [PostController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/add-category', [CategoryController::class, 'create']);
Route::post('/add-category', [CategoryController::class, 'store']);
Route::get('/edit-category/{category_id}', [CategoryController::class, 'edit']);
Route::put('/update-category/{category_id}', [CategoryController::class, 'update']);
Route::delete('/delete-category/{category_id}', [CategoryController::class, 'destroy']);


// backend contact from
Route::resource('showcontacts', ShowcontactController::class);
// backend contact from  end
// frontend contact form
Route::get('/contact', [App\Http\Controllers\Backend\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ App\Http\Controllers\Backend\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
// frontend contact form end
// back end newsletters form
Route::resource('newsletters',newsletterController::class);
// // back end newsletters form end
Route::resource('services',ServiceController::class);
Route::resource('service-details',ServiceDetailController::class);
Route::resource('gallerys', PhotoController::class);
