<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductBookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Frontend  Route Starts
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('frontend.layouts.layout');
})->name('home');


Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about-us', 'frontend.about-us')->name('about-us');
Route::view('/team', 'frontend.team')->name('team');
Route::view('/projects', 'frontend.projects')->name('projects');
Route::view('/our-story', 'frontend.our-story')->name('our-story');
Route::view('/contact-us', 'frontend.contact-us')->name('contact-us');
Route::view('/strategic-healthcare-consultancy', 'frontend.strategic-healthcare-consultancy')->name('strategic-healthcare-consultancy');
Route::view('/market-feasibility', 'frontend.market-feasibility')->name('market-feasibility');
Route::view('/financial-feasibility', 'frontend.financial-feasibility')->name('financial-feasibility');
Route::view('/design-and-construction', 'frontend.design-and-construction')->name('design-and-construction');
Route::view('/project-management', 'frontend.project-management')->name('project-management');
Route::view('/medical-equipment-planner', 'frontend.medical-equipment-planner')->name('medical-equipment-planner');
Route::view('/healthcare-operations-management', 'frontend.healthcare-operations-management')->name('healthcare-operations-management');
Route::view('/healthcare-investment-consulting', 'frontend.healthcare-investment-consulting')->name('healthcare-investment-consulting');
Route::view('/healthcare-performance-management', 'frontend.healthcare-performance-management')->name('healthcare-performance-management');
Route::view('/hospital-business-setup', 'frontend.hospital-business-setup')->name('hospital-business-setup');
Route::view('/clinic-setup', 'frontend.clinic-setup')->name('clinic-setup');
Route::view('/contact-us', 'frontend.contact-us')->name('contact-us');

Route::post('/contact-submit', [HomeController::class, 'contactSubmit'])->name('contact.submit');
Route::view('/thank-you', 'frontend.thank-you')->name('thankyou');

Route::get('/gallery', [HomeController::class, 'Gallery'])->name('galleries');
Route::post('/gallery', [HomeController::class, 'Gallery'])->name('gallery');


Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [HomeController::class, 'show'])->name('blog.details');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('blog.category');

Route::get('/{slug}', [HomeController::class, 'pages'])->name('page.details');


/*
|--------------------------------------------------------------------------
| Frontend  Route Ends
|--------------------------------------------------------------------------
|
|
*/


/*
|--------------------------------------------------------------------------
| Backend  Route Start
|--------------------------------------------------------------------------
|
|
*/


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('dashboard')->group(function () {
        Route::resource('categories', CategoryController::class);
    });
    Route::prefix('dashboard')->name('admin.')->middleware(['auth'])->group(function () {
        Route::resource('blogs', BlogController::class);
         Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
         Route::resource('teams', \App\Http\Controllers\Admin\TeamsController::class);
         Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
         Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
    });
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/product-bookings', [ProductBookingController::class, 'index'])->name('product.bookings');
        Route::delete('/product-bookings/{id}', [ProductBookingController::class, 'destroy'])->name('product.bookings.destroy');
    });
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
        Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    });

    Route::post('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return back()->with('success', 'Cache cleared successfully!');
})->name('cache.clear')->middleware('auth');

});

require __DIR__ . '/auth.php';



