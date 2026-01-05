<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('connexion');
    }

    public function register()
    {
        return view('inscription');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }
}
