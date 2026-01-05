@extends('layout.app')

@section('content')
    <section class="about-hero-section">
        <div class="container">
            <span class="badge-pill-history">Notre Histoire</span>
            <h1 class="hero-title">
                À Propos de
                <span class="highlight-text-about">Notre Marque</span>
            </h1>
            <p class="hero-description">
                Passionnés par la beauté africaine, nous offrons des produits authentiques et des services professionnels
                depuis plus de 10 ans.
            </p>
        </div>
    </section>

    <!-- History Section -->
    <section class="history-section">
        <div class="container">
            <div class="history-grid">
                <div class="history-image">
                    <!-- Placeholder for the salon interior image -->
                    <img src="{{ asset('assets/aslan.png') }}" alt="Intérieur du salon Aslan Shop">
                </div>
                <div class="history-content">
                    <h2 class="history-title">Notre Histoire</h2>
                    <div class="history-text">
                        <p>
                            Fondée en 2014, notre entreprise est née d'une passion pour la beauté africaine et le désir de rendre accessibles des produits de qualité premium.
                        </p>
                        <p>
                            Nous avons commencé comme un petit salon de coiffure spécialisé dans le tressage, et nous avons progressivement élargi notre offre pour inclure une boutique en ligne proposant mèches, pagnes, sacs et chaussures.
                        </p>
                        <p>
                            Aujourd'hui, nous sommes fiers de servir des milliers de clientes satisfaites à travers le pays et au-delà, en combinant tradition et modernité.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">CE QUI NOUS GUIDE</span>
                <h2 class="section-title">Nos Valeurs</h2>
            </div>

            <div class="values-grid">
                <!-- Value 1 -->
                <div class="value-card">
                    <div class="value-icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <h3>Passion</h3>
                    <p>Nous aimons ce que nous faisons et cela se reflète dans chaque produit et service que nous offrons.</p>
                </div>

                <!-- Value 2 -->
                <div class="value-card">
                    <div class="value-icon">
                        <i class='bx bx-star'></i>
                    </div>
                    <h3>Qualité</h3>
                    <p>Nous sélectionnons rigoureusement nos produits pour garantir authenticité et excellence.</p>
                </div>

                <!-- Value 3 -->
                <div class="value-card">
                    <div class="value-icon">
                        <i class='bx bx-group'></i>
                    </div>
                    <h3>Proximité</h3>
                    <p>Nous cultivons une relation de confiance avec nos clientes, basée sur l'écoute et le respect.</p>
                </div>

                <!-- Value 4 -->
                <div class="value-card">
                    <div class="value-icon">
                        <i class='bx bx-leaf'></i>
                    </div>
                    <h3>Authenticité</h3>
                    <p>Nous valorisons les traditions africaines tout en embrassant la modernité.</p>
                </div>

                <!-- Value 5 -->
                <div class="value-card">
                    <div class="value-icon">
                        <i class='bx bx-bulb'></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Nous cherchons constamment à améliorer nos services et à proposer de nouvelles solutions.</p>
                </div>

                <!-- Value 6 -->
                <div class="value-card">
                    <div class="value-icon">
                        <i class='bx bx-shield-check'></i>
                    </div>
                    <h3>Confiance</h3>
                    <p>Nous nous engageons à respecter nos promesses et à garantir votre satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">LES EXPERTES</span>
                <h2 class="section-title">Notre Équipe</h2>
                <p class="section-description">Des professionnelles passionnées et expérimentées à votre service</p>
            </div>

            <div class="team-grid">
                <!-- Member 1 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('assets/yu.jpg') }}" alt="Fatou Sow">
                    </div>
                    <h3>Fatou Sow</h3>
                    <p class="member-role">Fondatrice & Directrice</p>
                </div>

                <!-- Member 2 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('assets/yu.jpg') }}" alt="Aïcha Diop">
                    </div>
                    <h3>Aïcha Diop</h3>
                    <p class="member-role">Coiffeuse Experte</p>
                </div>

                <!-- Member 3 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('assets/yu.jpg') }}" alt="Mariama Koné">
                    </div>
                    <h3>Mariama Koné</h3>
                    <p class="member-role">Responsable Boutique</p>
                </div>

                <!-- Member 4 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('assets/yu.jpg') }}" alt="Aminata Traoré">
                    </div>
                    <h3>Aminata Traoré</h3>
                    <p class="member-role">Styliste Mode</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="section-header-dark">
                <h2 class="stats-title">Nos Réalisations</h2>
                <p class="stats-subtitle">Des chiffres qui témoignent de notre engagement</p>
            </div>

            <div class="stats-grid">
                <!-- Stat 1 -->
                <div class="stat-item">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">Années d'Expérience</span>
                </div>

                <!-- Stat 2 -->
                <div class="stat-item">
                    <span class="stat-number">5000+</span>
                    <span class="stat-label">Clientes Satisfaites</span>
                </div>

                <!-- Stat 3 -->
                <div class="stat-item">
                    <span class="stat-number">450+</span>
                    <span class="stat-label">Produits en Stock</span>
                </div>

                <!-- Stat 4 -->
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Taux de Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Community CTA Section -->
    <section class="community-cta-section">
        <div class="container">
            <h2 class="community-title">Rejoignez Notre Communauté</h2>
            <p class="community-text">
                Découvrez nos produits et services, et faites partie de milliers de clientes qui nous font confiance pour sublimer leur beauté.
            </p>
            <div class="community-buttons">
                <a href="#" class="btn-shop-cta">Découvrir la Boutique <i class='bx bx-right-arrow-alt'></i></a>
                <a href="{{ url('/services') }}" class="btn-services-cta">Nos Services</a>
            </div>
        </div>
    </section>
@endsection