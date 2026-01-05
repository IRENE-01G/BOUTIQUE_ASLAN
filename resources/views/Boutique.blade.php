<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - Beauté & Mode</title>
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/Boutique.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header (Reused) -->
    <header>
        <nav class="navbar">
            <div class="logo-section">
                <img src="{{ asset('assets/lg.png') }}" alt="Logo Aslan Shop" class="logo">
            </div>
            
            <ul class="nav-links">
                <li><a href="/">Accueil</a></li>
                <li><a href="/boutique" style="color: #ff6b81; font-weight: 700;">Boutique</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Rendez-vous</a></li>
                <li><a href="#">À propos</a></li>
            </ul>

            <div class="nav-actions">
                <button class="btn-connexion">Connexion</button>
                <div class="cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span class="badge">0</span>
                </div>
            </div>
        </nav>
    </header>

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
            <!-- Product 1 -->
            <div class="product-card">
                <span class="product-badge badge-sale">POPULAIRE</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/french_curly.jpg') }}" alt="Mèches Afro Kinky">
                </div>
                <div class="product-info">
                    <span class="product-category">Mèches & Extensions</span>
                    <h3>Mèches Afro Kinky</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★★</span>
                        <span class="review-count">(67 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">50 000 FCFA</span>
                    </div>
                    <p class="stock-status">📦 10 en stock</p>
                    <button class="btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <span class="product-badge badge-sale">POPULAIRE</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/french_curly.jpg') }}" alt="Mèches Deep Wave">
                </div>
                <div class="product-info">
                    <span class="product-category">Mèches & Extensions</span>
                    <h3>Mèches Deep Wave</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★☆</span>
                        <span class="review-count">(61 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">46 000 FCFA</span>
                    </div>
                    <p class="stock-status">📦 11 en stock</p>
                    <button class="btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <!-- No badge -->
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/french_curly.jpg') }}" alt="Mèches Body Wave">
                </div>
                <div class="product-info">
                    <span class="product-category">Mèches & Extensions</span>
                    <h3>Mèches Body Wave</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★☆</span>
                        <span class="review-count">(56 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">44 000 FCFA</span>
                    </div>
                    <p class="stock-status">📦 22 en stock</p>
                    <button class="btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        Ajouter au panier
                    </button>
                </div>
            </div>

             <!-- Product 4 -->
             <div class="product-card">
                <span class="product-badge badge-sale">POPULAIRE</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/sac.jpg') }}" alt="Sac à Dos Urbain">
                </div>
                <div class="product-info">
                    <span class="product-category">Sacs & Accessoires</span>
                    <h3>Sac à Dos Urbain</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★★</span>
                        <span class="review-count">(54 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">38 000 FCFA</span>
                    </div>
                    <p class="stock-status">📦 20 en stock</p>
                    <button class="btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <span class="product-badge badge-sale" style="background-color: #ff6b81;">-15%</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/french_curly.jpg') }}" alt="Mèches Indiennes Lisses">
                </div>
                <div class="product-info">
                    <span class="product-category">Mèches & Extensions</span>
                    <h3>Mèches Indiennes Lisses</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★☆</span>
                        <span class="review-count">(52 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">38 000 FCFA</span>
                        <span class="old-price">45 000 FCFA</span>
                    </div>
                    <p class="stock-status">📦 20 en stock</p>
                    <button class="btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <span class="product-badge badge-sale" style="background-color: #ff6b81;">-20%</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/french_curly.jpg') }}" alt="Mèches Brésiliennes">
                </div>
                <div class="product-info">
                    <span class="product-category">Mèches & Extensions</span>
                    <h3>Mèches Brésiliennes Premium</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★★</span>
                        <span class="review-count">(48 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">45 000 FCFA</span>
                        <span class="old-price">55 000 FCFA</span>
                    </div>
                    <p class="stock-status">📦 15 en stock</p>
                    <button class="btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Footer (Reused) -->
<footer>
    <div class="footer-content">
        <div class="footer-top">
            <div class="footer-col col-brand">
                <img src="{{ asset('assets/lg.png') }}" alt="Logo" class="footer-logo">
                <p class="footer-desc">Votre destination beauté et mode africaine. Produits premium et services professionnels.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                    <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                    <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                    <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>BOUTIQUE</h4>
                <ul class="footer-links">
                    <li><a href="#">Mèches</a></li>
                    <li><a href="#">Pagnes</a></li>
                    <li><a href="#">Sacs</a></li>
                    <li><a href="#">Chaussures</a></li>
                    <li><a href="#">Promotions</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>INFORMATIONS</h4>
                <ul class="footer-links">
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Livraison</a></li>
                    <li><a href="#">CGV</a></li>
                </ul>
            </div>

            <div class="footer-col col-newsletter">
                <h4>RESTEZ INFORMÉE</h4>
                <form class="newsletter-form">
                    <input type="email" placeholder="Votre email">
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </form>
                <p class="small-text">En vous inscrivant, vous acceptez notre <a href="#">politique de confidentialité</a></p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Beauté & Mode. Tous droits réservés. | Powered by Readdy</p>
        </div>
    </div>
</footer>

</body>
</html>
