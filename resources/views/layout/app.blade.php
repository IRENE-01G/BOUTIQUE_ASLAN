<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - Aslan Shop</title>
    <!-- Use Boxicons for icons as previously preferred in other conversations -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('styles/services.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/apropos.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/Boutique.css') }}">
</head>

<body>

    <header>
        <nav>
            <div class="logo-container">
                <a href="{{ url('/') }}">
                    <!-- Enhanced logo appearance -->
                    <img src="{{ asset('assets/aslan.png') }}" alt="Logo Aslan Shop"
                        style="border-radius: 50%; width: 50px; height: 50px; object-fit: cover;">
                </a>
            </div>

            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li><a href="#">Boutique</a></li>
                <li><a href="{{ url('/services') }}" class="active">Services</a></li>
                <!-- <li><a href="#">Rendez-vous</a></li> -->
                <li><a href="{{ url('/apropos') }}">À propos</a></li>
            </ul>

            <div class="nav-actions">
                <a href="{{ route('rendez-vous') }}" class="btn-rendez-vous" style="text-decoration: none;">Prendre rendez-vous</a>
                
                @auth
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-connexion">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-connexion" style="text-decoration: none;">Connexion</a>
                @endauth

                <div class="cart-icon">
                    <i class='bx bx-cart'></i>
                    <span class="cart-badge">0</span>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <!-- Column 1: Logo & Social -->
                <div class="footer-column">
                    <div class="footer-logo">
                        <!-- Using text/icon placeholder if logo usage is complex, but reuse asset if possible -->
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                            <img src="{{ asset('assets/aslan.png') }}" alt="Logo"
                                style="width: 40px; height: 40px; border-radius: 50%;">
                            <span style="font-weight: 700; font-size: 1.2rem; color: #fff;">BEAUTY</span>
                        </div>
                    </div>
                    <p class="footer-desc">
                        Votre destination beauté et mode africaine. Produits premium et services professionnels.
                    </p>
                    <div class="social-links">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    </div>
                </div>
    
                <!-- Column 2: Boutique -->
                <div class="footer-column">
                    <h3>BOUTIQUE</h3>
                    <ul class="footer-links">
                        <li><a href="#">Mèches</a></li>
                        <li><a href="#">Pagnes</a></li>
                        <li><a href="#">Sacs</a></li>
                        <li><a href="#">Chaussures</a></li>
                        <li><a href="#">Promotions</a></li>
                    </ul>
                </div>
    
                <!-- Column 3: Informations -->
                <div class="footer-column">
                    <h3>INFORMATIONS</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/apropos') }}">À propos</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Livraison</a></li>
                        <li><a href="#">CGV</a></li>
                    </ul>
                </div>
    
                <!-- Column 4: Horaires -->
                <div class="footer-column">
                    <h3>HORAIRES</h3>
                    <ul class="schedule-list">
                        <li>Lundi - Vendredi: 9h - 19h</li>
                        <li>Samedi: 9h - 20h</li>
                        <li>Dimanche: 10h - 18h</li>
                    </ul>
                    <div class="footer-phone">
                        <h4>Téléphone</h4>
                        <p>+221 77 123 45 67</p>
                    </div>
                </div>
            </div>
    
            <div class="footer-bottom">
    
                <p>&copy; 2024 Beauté & Mode. Tous droits réservés. | Powered by Readdy</p>
                <!-- Watermark text behind -->
                <div class="footer-watermark">BEAUTÉ & MODE</div>
            </div>
        </div>
    </footer>

</body>

</html>