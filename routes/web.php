<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
