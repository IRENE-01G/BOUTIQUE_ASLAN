<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('connexion');
    }

    public function register()
=======
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
>>>>>>> aed3f578713dd423a6d2266c8a50946967d87ce0
    {
        return view('inscription');
    }

<<<<<<< HEAD
    public function forgotPassword()
    {
        return view('forgot-password');
=======
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Inscription réussie !');
    }

    public function showLoginForm()
    {
        return view('connexion');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Vous êtes connecté !');
        }

        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
>>>>>>> aed3f578713dd423a6d2266c8a50946967d87ce0
    }
}
