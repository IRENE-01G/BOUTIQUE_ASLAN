<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);

// Boutique
Route::get('/boutique', [ShopController::class, 'index']);

// Services & Rendez-vous
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/rendez-vous', [ServiceController::class, 'appointment']);

// Pages
Route::get('/apropos', [PageController::class, 'about']);

// Auth
Route::get('/inscription', [AuthController::class, 'register']);
Route::get('/connexion', [AuthController::class, 'login']);
Route::get('/mot-de-passe-oublie', [AuthController::class, 'forgotPassword']);

// Admin

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});
=======
Route::get('/', function () {
    return view('Accueil');
})->name('home');

Route::get('/boutique', function () {
    return view('Boutique');
})->name('boutique');

// Auth Routes
Route::get('/inscription', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/inscription', [AuthController::class, 'register'])->name('register.post');
Route::get('/connexion', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/connexion', [AuthController::class, 'login'])->name('login.post');
Route::post('/deconnexion', [AuthController::class, 'logout'])->name('logout');

Route::get('/mot-de-passe-oublie', function () {
    return view('forgot-password');
})->name('password.request');

Route::get('/rendez-vous', function () {
    return view('rendez-vous');
})->name('rendez-vous');
>>>>>>> aed3f578713dd423a6d2266c8a50946967d87ce0
