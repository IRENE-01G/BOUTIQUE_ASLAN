<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Reservation;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = 500;
        $totalProduits = 86;
        $totalCommandes = 12;
        $totalReservations = 5;

        // Fetch recent orders with user relationship if available
        $recentOrders = [];

        return view('admin.dashboard', compact('totalUsers', 'totalProduits', 'totalCommandes', 'totalReservations', 'recentOrders'));
    }
}
