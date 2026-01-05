<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/lg.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo-section">
                <img src="{{ asset('assets/lg.png') }}" alt="Logo Aslan Shop" class="logo">
            </div>
            
            <ul class="nav-links">
                <li><a href="">Accueil</a></li>
                <li><a href="/boutique">Boutique</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">À propos</a></li>
            </ul>

            <div class="nav-actions">
                <button class="btn-connexion">Prendre rendez-vous</button>
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
    </header><br><br><br>
    <section class="hero-section">
        <div class="hero-image-container">
            <img src="{{ asset('assets/yu.jpg') }}" alt="Beauty Model" class="hero-image">
        </div>
        
        <div class="hero-content">
            <h1>Beauté <br> Africaine <br> <span class="highlight">Redéfinie</span></h1>
            <p>Découvrez notre collection exclusive de mèches, pagnes et accessoires. Prenez rendez-vous pour un tressage professionnel réalisé par nos expertes.</p>
            
            <div class="hero-buttons">
                <button class="btn-primary">
                    Explorer la Boutique 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
                <button class="btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Prendre RDV
                </button>
            </div>
        </div>
    </section>
</section><br><br><br>

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
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
            </div>
        </div>
    </div>
    </div>
</div><br><br><br>

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
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
            </div>
            <h3>Livraison Rapide</h3>
            <p>Expédition sous 24h. Livraison gratuite dès 50€ d'achat. Suivi en temps réel de votre commande.</p>
        </div>

        <div class="engagement-card">
            <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4"></path></svg>
            </div>
            <h3>Qualité Garantie</h3>
            <p>Produits 100% authentiques. Garantie satisfait ou remboursé pendant 30 jours.</p>
        </div>

        <div class="engagement-card">
            <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </div>
            <h3>Support 7j/7</h3>
            <p>Notre équipe répond à vos questions par chat, email ou téléphone tous les jours.</p>
        </div>
    </div>
</div>

    </div>
</div>

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
