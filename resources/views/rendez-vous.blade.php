<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre Rendez-vous - Beauté & Mode</title>
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/rendez-vous.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/lg.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header (Synced) -->
    <header>
        <nav class="navbar">
            <div class="logo-section">
                <img src="{{ asset('assets/lg.png') }}" alt="Logo Aslan Shop" class="logo">
            </div>
            
            <ul class="nav-links">
                <li><a href="/">Accueil</a></li>
                <li><a href="/boutique">Boutique</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="/rendez-vous" style="color: #ff6b81; font-weight: 700;">Rendez-vous</a></li>
                <li><a href="#">À propos</a></li>
            </ul>

            <div class="nav-actions">
                <a href="/rendez-vous" class="btn-connexion" style="text-decoration: none;">Prendre rendez-vous</a>
                <a href="/connexion" class="btn-connexion" style="text-decoration: none;">Connexion</a>
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

    <!-- Hero -->
    <div class="booking-hero">
        <span class="badge-pill">Réservation en ligne</span>
        <h1>Votre moment de <span class="highlight">Beauté</span></h1>
        <p>Sélectionnez vos prestations et créneaux préférés en quelques clics.</p>
    </div>

    <!-- Booking Container -->
    <div class="booking-container">
        <form class="booking-form">
            <!-- Step 1: Services -->
            <div class="form-section">
                <div class="section-header">
                    <div class="step-number">1</div>
                    <h2>Choisissez votre prestation</h2>
                </div>
                
                <div class="services-grid">
                    <label class="service-card">
                        <input type="checkbox" name="service" value="tressage">
                        <div class="card-content">
                            <div class="service-icon">💇🏾‍♀️</div>
                            <h3>Tressage Complet</h3>
                            <p class="price">40 000 FCFA</p>
                            <span class="duration">⏱ 4h</span>
                        </div>
                    </label>

                    <label class="service-card">
                        <input type="checkbox" name="service" value="perruque">
                        <div class="card-content">
                            <div class="service-icon">🎀</div>
                            <h3>Pose Perruque</h3>
                            <p class="price">15 000 FCFA</p>
                            <span class="duration">⏱ 1h 30</span>
                        </div>
                    </label>

                    <label class="service-card">
                        <input type="checkbox" name="service" value="soin">
                        <div class="card-content">
                            <div class="service-icon">✨</div>
                            <h3>Soin Capillaire</h3>
                            <p class="price">10 000 FCFA</p>
                            <span class="duration">⏱ 1h</span>
                        </div>
                    </label>

                     <label class="service-card">
                        <input type="checkbox" name="service" value="maquillage">
                        <div class="card-content">
                            <div class="service-icon">💄</div>
                            <h3>Maquillage Pro</h3>
                            <p class="price">20 000 FCFA</p>
                            <span class="duration">⏱ 1h</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Step 2: Date & Time -->
            <div class="form-section">
                <div class="section-header">
                    <div class="step-number">2</div>
                    <h2>Date et Heure</h2>
                </div>

                <div class="datetime-wrapper">
                    <div class="calendar-container">
                        <h3>Janvier 2026</h3>
                        <div class="calendar-grid">
                            <span class="day-name">Lun</span><span class="day-name">Mar</span><span class="day-name">Mer</span><span class="day-name">Jeu</span><span class="day-name">Ven</span><span class="day-name">Sam</span><span class="day-name">Dim</span>
                            
                            <span class="post-date disabled">29</span><span class="post-date disabled">30</span><span class="post-date disabled">31</span>
                            <span>1</span><span>2</span><span>3</span><span class="disabled-day">4</span>
                            <span class="active-day">5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span class="disabled-day">11</span>
                            <span>12</span><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span class="disabled-day">18</span>
                        </div>
                    </div>

                    <div class="time-slots">
                        <h3>Disponibilités le 5 Jan</h3>
                        <div class="slots-grid">
                            <button type="button" class="time-slot" disabled>09:00</button>
                            <button type="button" class="time-slot">10:00</button>
                            <button type="button" class="time-slot active">11:00</button>
                            <button type="button" class="time-slot">13:30</button>
                            <button type="button" class="time-slot">14:30</button>
                            <button type="button" class="time-slot">16:00</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Contact -->
            <div class="form-section">
                <div class="section-header">
                    <div class="step-number">3</div>
                    <h2>Vos Coordonnées</h2>
                </div>

                <div class="contact-grid">
                    <div class="input-group">
                        <label>Nom complet</label>
                        <input type="text" placeholder="Aminata Diallo" required>
                    </div>
                    <div class="input-group">
                        <label>Téléphone</label>
                        <input type="tel" placeholder="+237 6..." required>
                    </div>
                    <div class="input-group full-width">
                        <label>Email</label>
                        <input type="email" placeholder="example@gmail.com">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-confirm">
                Confirmer le Rendez-vous
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
        </form>
    </div>

    <!-- Footer (Reused) -->
    <footer>
        <div class="footer-content">
            <div class="footer-bottom">
                <p>&copy; 2024 Beauté & Mode. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

</body>
</html>
