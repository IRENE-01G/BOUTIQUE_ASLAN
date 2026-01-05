@extends('layout.app')

<<<<<<< HEAD
@section('content')
    <section class="hero">
=======
            <div class="nav-actions">
                <a href="{{ route('rendez-vous') }}" class="btn-connexion" style="text-decoration: none;">Prendre rendez-vous</a>
                @auth
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-connexion">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-connexion">Connexion</a>
                @endauth
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
    </header><br><br><br>
    <section class="hero-section">
>>>>>>> aed3f578713dd423a6d2266c8a50946967d87ce0
        <div class="hero-image-container">
            <img src="{{ asset('assets/yu.jpg') }}" alt="Beauty Model" class="hero-image">
        </div>
        
        <div class="hero-content">
            <h1>Beauté <br> Africaine <br> <span class="highlight">Redéfinie</span></h1>
            <p>Découvrez notre collection exclusive de mèches, pagnes et accessoires. Prenez rendez-vous pour un tressage professionnel réalisé par nos expertes.</p>
            
            <div class="hero-buttons">
                <button class="btn-primary">
                    Explorer la Boutique 
                    <i class='bx bx-right-arrow-alt'></i>
                </button>
                <button class="btn-secondary">
                    <i class='bx bx-calendar'></i>
                    Prendre RDV
                </button>
            </div>
        </div>
    </section>

    <div class="universe-section">
        <p class="section-subtitle">NOS COLLECTIONS</p>
        <h1>Explorez Nos Univers</h1>
        
        <div class="universe-grid">
            <!-- Card 1: Mèches & Extensions -->
            <div class="universe-card">
                <div class="card-header bg-pink">
                    <img src="{{ asset('assets/french_curly.jpg') }}" alt="Mèches & Extensions">
                </div>
                <div class="card-body">
                    <h3>Mèches & Extensions</h3>
                    <p>150+ produits</p>
                    <button class="card-arrow-btn">
                        <i class='bx bx-right-arrow-alt'></i>
                    </button>
                </div>
            </div>
    
            <!-- Card 2: Pagnes Africains -->
            <div class="universe-card">
                <div class="card-header bg-orange">
                    <img src="{{ asset('assets/lp.jpg') }}" alt="Pagnes Africains"> <!-- Generic placeholder if no cloth image -->
                </div>
                <div class="card-body">
                    <h3>Pagnes Africains</h3>
                    <p>80+ modèles</p><br><br>
                    <button class="card-arrow-btn">
                        <i class='bx bx-right-arrow-alt'></i>
                    </button>
                </div>
            </div>
    
            <!-- Card 3: Sacs & Accessoires -->
            <div class="universe-card">
                <div class="card-header bg-purple">
                    <img src="{{ asset('assets/sac.jpg') }}" alt="Sacs & Accessoires">
                </div>
                <div class="card-body">
                    <h3>Sacs & Accessoires</h3>
                    <p>120+ articles</p>
                    <button class="card-arrow-btn">
                        <i class='bx bx-right-arrow-alt'></i>
                    </button>
                </div>
            </div>
    
            <!-- Card 4: Chaussures Mode -->
            <div class="universe-card">
                <div class="card-header bg-blue">
                    <img src="{{ asset('assets/yu.jpg') }}" alt="Chaussures Mode"> <!-- Using model image as placeholder -->
                </div>
                <div class="card-body">
                    <h3>Chaussures Mode</h3>
                    <p>90+ paires</p>
                    <button class="card-arrow-btn">
                        <i class='bx bx-right-arrow-alt'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="services-section">
        <div class="service-content-card">
            <span class="service-badge">SERVICE PREMIUM</span>
            <h2>Tressage Professionnel <br> <span class="highlight-pink">Sur Rendez-vous</span></h2>
            <p>Nos coiffeuses expertes vous accueillent dans un espace moderne. Choisissez votre style, réservez votre créneau en quelques clics.</p>
            
            <div class="service-features">
                <div class="feature-item">
                    <span class="check-icon">✓</span>
                    <span>Expertise de 10+ ans</span>
                </div>
                <div class="feature-item">
                    <span class="check-icon">✓</span>
                    <span>Produits premium inclus</span>
                </div>
                <div class="feature-item">
                    <span class="check-icon">✓</span>
                    <span>Annulation gratuite 24h avant</span>
                </div>
            </div>
    
            <button class="btn-primary">
                <i class='bx bx-calendar-event'></i>
                Réserver Maintenant
            </button>
        </div>
    
        <div class="service-image-container">
            <img src="{{ asset('assets/twist.jpg') }}" alt="Service Tressage" class="service-image">
        </div>
    </div>
    
    <div class="best-sellers-section">
        <p class="section-subtitle">BEST-SELLERS</p>
        <h1>Nos Coups de Cœur</h1>
    
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <span class="product-badge badge-sale">-20%</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/french_curly.jpg') }}" alt="Mèches Brésiliennes">
                </div>
                <div class="product-info">
                    <span class="product-category">Extensions</span>
                    <h3>Mèches Brésiliennes Premium</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★★</span>
                        <span class="review-count">(48 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">45 000 FCFA</span>
                        <span class="old-price">55 000 FCFA</span>
                    </div>
                    <button class="btn-outline">Ajouter au panier</button>
                </div>
            </div>
    
            <!-- Product 2 -->
            <div class="product-card">
                <span class="product-badge badge-new">NOUVEAU</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/lp.jpg') }}" alt="Pagne Wax">
                </div>
                <div class="product-info">
                    <span class="product-category">Tissus</span>
                    <h3>Pagne Wax Authentique</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★☆</span>
                        <span class="review-count">(48 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">25 000 FCFA</span>
                    </div>
                    <button class="btn-outline">Ajouter au panier</button>
                </div>
            </div>
    
            <!-- Product 3 -->
            <div class="product-card">
                <span class="product-badge badge-sale">-15%</span>
                <div class="product-image-wrapper">
                    <img src="{{ asset('assets/sac.jpg') }}" alt="Sac à Main Cuir">
                </div>
                <div class="product-info">
                    <span class="product-category">Accessoires</span>
                    <h3>Sac à Main Cuir</h3>
                    <div class="product-rating">
                        <span class="stars">★★★★★</span>
                        <span class="review-count">(48 avis)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">35 000 FCFA</span>
                        <span class="old-price">42 000 FCFA</span>
                    </div>
                    <button class="btn-outline">Ajouter au panier</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="testimonial-section">
        <div class="testimonial-card">
            <div class="quote-icon">“</div>
            <div class="testimonial-image-wrapper">
                <img src="{{ asset('assets/yu.jpg') }}" alt="Client Heureux">
            </div>
            <div class="testimonial-content">
                <p class="testimonial-text">Une expérience exceptionnelle ! Les mèches sont de qualité premium et le service de tressage est impeccable. L'équipe est professionnelle et à l'écoute. Je recommande vivement !</p>
                <div class="testimonial-author">
                    <h4>Aminata Diallo</h4>
                    <span>Cliente depuis 2023</span>
                </div>
                <button class="btn-light">Voir tous les avis</button>
            </div>
        </div>
    </div>
    
    <div class="engagements-section">
        <p class="section-subtitle">POURQUOI NOUS CHOISIR</p>
        <h1>Nos Engagements</h1><br>
        
        <div class="engagements-grid">
            <div class="engagement-card">
                <div class="icon-box">
                    <i class='bx bx-package' style='font-size: 32px;'></i>
                </div>
                <h3>Livraison Rapide</h3>
                <p>Expédition sous 24h. Livraison gratuite dès 50€ d'achat. Suivi en temps réel de votre commande.</p>
            </div>
    
            <div class="engagement-card">
                <div class="icon-box">
                    <i class='bx bx-badge-check' style='font-size: 32px;'></i>
                </div>
                <h3>Qualité Garantie</h3>
                <p>Produits 100% authentiques. Garantie satisfait ou remboursé pendant 30 jours.</p>
            </div>
    
            <div class="engagement-card">
                <div class="icon-box">
                    <i class='bx bx-support' style='font-size: 32px;'></i>
                </div>
                <h3>Support 7j/7</h3>
                <p>Notre équipe répond à vos questions par chat, email ou téléphone tous les jours.</p>
            </div>
        </div>
    </div>
@endsection
