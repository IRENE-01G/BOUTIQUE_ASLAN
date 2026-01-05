<?php

use Illuminate\Support\Facades\Route;

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
