<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produit;

class ShopController extends Controller
{
    public function index()
    {
        $products = Produit::latest()->paginate(12);
        return view('Boutique', compact('products'));
    }
}
