<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminController;


// --- Public Routes ---

// Accueil
Route::get('/', function () {
    return view('Accueil');
})->name('home');

// Boutique (Using Controller)
Route::get('/boutique', [ShopController::class, 'index'])->name('boutique');

// Services & Rendez-vous
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/rendez-vous', [ServiceController::class, 'appointment'])->name('rendez-vous');

// Pages Statiques
Route::get('/apropos', [PageController::class, 'about'])->name('about');


// --- Authentication Routes ---

Route::get('/inscription', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/inscription', [AuthController::class, 'register'])->name('register.post');
Route::get('/connexion', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/connexion', [AuthController::class, 'login'])->name('login.post');
Route::post('/deconnexion', [AuthController::class, 'logout'])->name('logout');

// Password Reset
Route::get('/mot-de-passe-oublie', [AuthController::class, 'forgotPassword'])->name('password.request');
Route::post('/mot-de-passe-oublie', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reinitialiser-mot-de-passe/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reinitialiser-mot-de-passe', [AuthController::class, 'resetPassword'])->name('password.update');


// --- Admin Routes (Protected) ---

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Product Management
    Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [AdminProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');

    // Future Admin Routes...
});