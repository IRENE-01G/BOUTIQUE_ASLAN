<<<<<<< HEAD
@extends('layout.app')
=======
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - Beauté & Mode</title>
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/Boutique.css') }}">
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/lg.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
>>>>>>> aed3f578713dd423a6d2266c8a50946967d87ce0

@section('content')

<!-- Boutique Hero -->
<div class="boutique-hero">
    <span class="hero-label">Livraison gratuite dès 50 000 FCFA</span>
    <h1>Notre <span class="highlight-pink">Boutique</span></h1>
    <p>Découvrez notre collection exclusive de mèches premium et sacs tendance</p>
</div>

<!-- Main Content -->
<div class="boutique-container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <!-- Categories -->
        <div class="filter-group">
            <h3>Catégories</h3>
            <ul class="category-list">
                <li>
                    <a href="#" class="category-item active">
                        <span>Tous les produits</span>
                        <span class="count-badge">48</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="category-item">
                        <span>Mèches & Extensions</span>
                        <span class="count-badge">28</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="category-item">
                        <span>Sacs & Accessoires</span>
                        <span class="count count-text">20</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Prix -->
        <div class="filter-group">
            <h3>Prix</h3>
            <div class="price-options">
                <label class="radio-option">
                    <input type="radio" name="price" checked>
                    <span class="radio-custom"></span>
                    <span>Tous les prix</span>
                </label>
                <label class="radio-option">
                    <input type="radio" name="price">
                    <span class="radio-custom"></span>
                    <span>Moins de 30 000 FCFA</span>
                </label>
                <label class="radio-option">
                    <input type="radio" name="price">
                    <span class="radio-custom"></span>
                    <span>30 000 - 40 000 FCFA</span>
                </label>
                <label class="radio-option">
                    <input type="radio" name="price">
                    <span class="radio-custom"></span>
                    <span>40 000 - 50 000 FCFA</span>
                </label>
                <label class="radio-option">
                    <input type="radio" name="price">
                    <span class="radio-custom"></span>
                    <span>Plus de 50 000 FCFA</span>
                </label>
            </div>
        </div>

        <button class="btn-reset">Réinitialiser les filtres</button>
    </aside>

    <!-- Product Grid Area -->
    <main class="products-area">
        <div class="products-header">
            <p><strong>20</strong> produits trouvés</p>
            <div class="sort-dropdown">
                <span>Trier par:</span>
                <select>
                    <option>Popularité</option>
                    <option>Prix croissant</option>
                    <option>Prix décroissant</option>
                </select>
            </div>
        </div>

        <div class="boutique-grid">
            @forelse($products as $product)
                <div class="product-card">
                    @if($product->stock <= 0)
                        <span class="product-badge badge-sale" style="background-color: #ef4444;">Rupture</span>
                    @elseif($product->created_at->diffInDays(now()) < 7)
                        <span class="product-badge badge-new" style="background-color: #10b981;">Nouveau</span>
                    @endif

                    <div class="product-image-wrapper">
                        <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/default-product.jpg') }}" alt="{{ $product->name }}">
                    </div>
                    <div class="product-info">
                        <span class="product-category">{{ $product->category->name ?? 'Collection' }}</span>
                        <h3>{{ $product->name }}</h3>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="review-count">(0 avis)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">{{ number_format($product->price, 0, ',', ' ') }} FCFA</span>
                        </div>
                        <p class="stock-status">
                            @if($product->stock > 0)
                                📦 {{ $product->stock }} en stock
                            @else
                                ❌ Indisponible
                            @endif
                        </p>
                        <button class="btn-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            Ajouter au panier
                        </button>
                    </div>
                </div>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                    <h3>Aucun produit disponible pour le moment.</h3>
                    <p>Revenez bientôt !</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div style="margin-top: 40px;">
            {{ $products->links() }}
        </div>
    </main>
</div>

@endsection


