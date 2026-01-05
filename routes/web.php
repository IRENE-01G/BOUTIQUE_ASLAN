<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Accueil');
});
Route::get('/boutique', function () {
    return view('Boutique');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/mot-de-passe-oublie', function () {
    return view('forgot-password');
});
Route::get('/rendez-vous', function () {
    return view('rendez-vous');
});
