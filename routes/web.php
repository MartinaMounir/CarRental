<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//About Route
Route::get('about', function () {
    return view('about');
});
//Blog Route
Route::get('blog', function () {
    return view('blog');
});
Route::get('/Admin/users', function () {
    return view('Admin/users');
})->middleware(['auth', 'verified'])->name('Admin/users');
//Route::get('/search', [HomeController::class, 'search'])->name('cars.search');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//contact Us Route
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('submit', [ContactController::class, 'submitForm'])->name('submit');
//Route::get('single/{id}', [HomeController::class, 'searchsingle']);
//Home Route
Route::get('/', [HomeController::class, 'index']);
//Single Route
Route::get('single/{id}', [HomeController::class, 'single'])->name('single');
//Cars Listing Route
Route::get('listings', [HomeController::class, 'carlisting'])->name('listings');
//Testimonial Route
Route::get('testimonial', [HomeController::class, 'Testimonial'])->name('testimonial');
//Admin Route
Route::prefix('Admin')->middleware(['auth','verified'])->group(function () {
    Route::resource('cars', controller: CarController::class);
    Route::resource('category', controller: CategoryController::class);
    Route::resource('testimonials', controller: TestimonialController::class);
    Route::resource('users', controller: UserController::class);
    Route::resource('messages', controller: MessageController::class);
});
require __DIR__ . '/auth.php';



