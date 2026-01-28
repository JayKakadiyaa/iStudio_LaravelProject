<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ErrorController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FeatureController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;

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

// --- PUBLIC ROUTES (No Login Required) ---
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


// --- PROTECTED ROUTES (Must be Logged In) ---
Route::middleware(['auth'])->group(function () {
    
    // 1. The Main Index Page (Your website content)
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // 2. The Dashboard Page (The green welcome screen after login)
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // 3. Internal Webpages
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    
    // --- CONTACT FORM ROUTES ---
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); 
    // ---------------------------

    Route::get('/feature', [FeatureController::class, 'index'])->name('feature');
    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::get('/404', [ErrorController::class, 'index'])->name('error.404');
    Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name('pricing');

    // 4. Logout Route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});