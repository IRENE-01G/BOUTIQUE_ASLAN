<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Accueil');
});

Route::get('/services', function () {
    return view('Services');
});

Route::get('/apropos', function () {
    return view('Apropos');
});
