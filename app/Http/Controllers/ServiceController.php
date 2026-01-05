<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('Services');
    }

    public function appointment()
    {
        return view('rendez-vous');
    }
}
