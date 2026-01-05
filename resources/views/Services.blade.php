@extends('layout.app')

@section('content')
    <section class="hero-section">
        <div class="container">
            <span class="badge-pill">Services Professionnels</span>
            <h1 class="hero-title">
                Nos Services de
                <span class="highlight-text">Coiffure</span>
            </h1>
            <p class="hero-description">
                Des prestations de qualité réalisées par des coiffeuses expertes dans un cadre moderne et
                accueillant.
            </p>
        </div>
    </section>

    <!-- New Section -->
    <section class="services-list-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">NOS PRESTATIONS</span>
                <h2 class="section-title">Services de Tressage</h2>
            </div>

            <div class="services-grid">
                <!-- Service Card 1 -->
                <div class="service-card">
                    <div class="card-image">
                        <!-- Placeholder -->
                        <img src="{{ asset('assets/knotless tresse.jpg') }}" alt="Box Braids">
                        <div class="card-overlay">
                            <h3>Box Braids</h3>
                            <span class="duration"><i class='bx bx-time'></i> 4-6 heures</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="service-description">Tresses carrées classiques, idéales pour un look élégant et
                            durable.</p>
                        <div class="card-footer">
                            <span class="price">35 000 FCFA</span>
                            <button class="btn-reserver">Réserver</button>
                        </div>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/natte.jpg') }}" alt="Cornrows">
                            <div class="card-overlay">
                                <h3>Cornrows</h3>
                                <span class="duration"><i class='bx bx-time'></i> 2-3 heures</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="service-description">Tresses collées au cuir chevelu, parfaites pour un style
                                sophistiqué.</p>
                            <div class="card-footer">
                                <span class="price">25 000 FCFA</span>
                                <button class="btn-reserver">Réserver</button>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/twist.jpg') }}" alt="Twists">
                            <div class="card-overlay">
                                <h3>Twists</h3>
                                <span class="duration"><i class='bx bx-time'></i> 3-4 heures</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="service-description">Torsades élégantes pour un look naturel et protecteur.</p>
                            <div class="card-footer">
                                <span class="price">30 000 FCFA</span>
                                <button class="btn-reserver">Réserver</button>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 4 -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/butterfly locs.jpg') }}" alt="Faux Locs">
                            <div class="card-overlay">
                                <h3>Faux Locs</h3>
                                <span class="duration"><i class='bx bx-time'></i> 5-7 heures</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="service-description">Dreadlocks temporaires pour un style bohème et tendance.</p>
                            <div class="card-footer">
                                <span class="price">45 000 FCFA</span>
                                <button class="btn-reserver">Réserver</button>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 5 -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/boho tresse.jpg') }}" alt="Crochet Braids">
                            <div class="card-overlay">
                                <h3>Crochet Braids</h3>
                                <span class="duration"><i class='bx bx-time'></i> 2-3 heures</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="service-description">Installation rapide de mèches pour un résultat volumineux.
                            </p>
                            <div class="card-footer">
                                <span class="price">28 000 FCFA</span>
                                <button class="btn-reserver">Réserver</button>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 6 -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/microtwist.jpg') }}" alt="Tresses Sénégalaises">
                            <div class="card-overlay">
                                <h3>Tresses Sénégalaises</h3>
                                <span class="duration"><i class='bx bx-time'></i> 4-5 heures</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="service-description">Tresses fines et élégantes, signature de la beauté africaine.
                            </p>
                            <div class="card-footer">
                                <span class="price">38 000 FCFA</span>
                                <button class="btn-reserver">Réserver</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

        <!-- Other Services Section -->
    <section class="other-services-section">
        <div class="container">
            <div class="section-header">
                    <span class="section-subtitle">SERVICES COMPLÉMENTAIRES</span>
                    <h2 class="section-title">Autres Prestations</h2>
                </div>

                <div class="other-services-grid">
                    <!-- Service 1 -->
                    <div class="other-service-card">
                        <div class="service-icon">
                            <i class='bx bx-cut'></i>
                        </div>
                        <div class="service-details">
                            <h3>Coupe & Coiffage</h3>
                            <span class="service-price">À partir de 15 000 FCFA</span>
                            <p>Coupe personnalisée et coiffage professionnel adaptés à votre style et morphologie.</p>
                            <a href="#" class="btn-more">En savoir plus</a>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="other-service-card">
                        <div class="service-icon">
                            <i class='bx bx-brush'></i>
                        </div>
                        <div class="service-details">
                            <h3>Coloration</h3>
                            <span class="service-price">À partir de 20 000 FCFA</span>
                            <p>Coloration complète ou mèches, avec des produits de qualité respectueux de vos cheveux.
                            </p>
                            <a href="#" class="btn-more">En savoir plus</a>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="other-service-card">
                        <div class="service-icon">
                            <i class='bx bx-droplet'></i>
                        </div>
                        <div class="service-details">
                            <h3>Soins Capillaires</h3>
                            <span class="service-price">À partir de 12 000 FCFA</span>
                            <p>Soins profonds, masques nourrissants et traitements pour cheveux abîmés.</p>
                            <a href="#" class="btn-more">En savoir plus</a>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="other-service-card">
                        <div class="service-icon">
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="service-details">
                            <h3>Défrisage</h3>
                            <span class="service-price">À partir de 18 000 FCFA</span>
                            <p>Défrisage doux avec des produits professionnels pour un résultat lisse et brillant.</p>
                            <a href="#" class="btn-more">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

        <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-header">
                    <span class="section-subtitle">COMMENT ÇA MARCHE</span>
                    <h2 class="section-title">Réserver en 3 Étapes</h2>
                </div>

                <div class="process-steps">
                    <!-- Step 1 -->
                    <div class="step-card">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">
                                <i class='bx bx-search'></i>
                            </div>
                            <span class="step-badge">01</span>
                        </div>
                        <h3>Choisissez votre service</h3>
                        <p>Parcourez nos prestations et sélectionnez celle qui vous convient.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-card">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">
                                <i class='bx bx-calendar'></i>
                            </div>
                            <span class="step-badge">02</span>
                        </div>
                        <h3>Sélectionnez date & heure</h3>
                        <p>Choisissez le créneau qui vous arrange dans notre calendrier en ligne.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="step-card">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">
                                <i class='bx bx-check-circle'></i>
                            </div>
                            <span class="step-badge">03</span>
                        </div>
                        <h3>Confirmez votre RDV</h3>
                        <p>Recevez une confirmation par email et SMS avec tous les détails.</p>
                    </div>
                </div>

                <div class="process-cta">
                    <button class="btn-cta-large"><i class='bx bx-calendar-event'></i> Prendre Rendez-vous
                        Maintenant</button>
                </div>
            </div>
    </section>

        <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="section-header">
                    <span class="section-subtitle">NOS RÉALISATIONS</span>
                    <h2 class="section-title">Galerie Avant/Après</h2>
                </div>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/knotless tresse.jpg') }}" alt="Réalisation 1">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/natte.jpg') }}" alt="Réalisation 2">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/twist.jpg') }}" alt="Réalisation 3">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/butterfly locs.jpg') }}" alt="Réalisation 4">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/boho tresse.jpg') }}" alt="Réalisation 5">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/microtwist.jpg') }}" alt="Réalisation 6">
                    </div>
                </div>
            </div>
    </section>

        <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Prête à Sublimer Votre Beauté ?</h2>
                <p class="cta-text">
                    Réservez dès maintenant votre rendez-vous et laissez nos expertes prendre soin de vos cheveux avec
                    passion et professionnalisme.
                </p>
            <div class="cta-buttons">
                <button class="btn-reserve-cta"><i class='bx bx-calendar-event'></i> Réserver Maintenant</button>
                <a href="{{ url('/') }}" class="btn-home-cta">Retour à l'Accueil</a>
            </div>
        </div>
    </section>

@endsection

    

