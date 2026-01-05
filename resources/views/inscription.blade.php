<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Beauté & Mode</title>
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/inscription.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="auth-container">
        <!-- Return Home Button -->
        <a href="/" class="btn-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Retour
        </a>

        <!-- Left Side: Image & Ambience -->
        <div class="auth-image-side">
            <img src="{{ asset('assets/lp.jpg') }}" alt="Mode Africaine" class="auth-bg-image" >
            <div class="auth-overlay">
                <div class="overlay-content">
                    <h1>Rejoignez l'élégance.</h1>
                    <p>Créez votre compte et accédez à nos collections exclusives de mèches et accessoires premium.</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Form -->
        <div class="auth-form-side">
            <div class="form-wrapper">
                <div class="brand-logo">
                    <img src="{{ asset('assets/lg.png') }}" alt="Logo" style="width: 200px; height: 200px;">
                </div>
                
                <h2>Créer un compte</h2>
                <p class="subtitle">Commencez votre expérience shopping unique</p>

                <form action="{{ route('register.post') }}" method="POST" class="auth-form">
                    @csrf
                    <div class="form-group">
                        <label style="margin-bottom: 10px;" for="name">Nom complet</label>
                        <div class="input-with-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="input-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <input type="text" id="name" name="name" placeholder="Votre nom" value="{{ old('name') }}" required>
                        </div>
                        @error('name')
                            <span style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label style="margin-bottom: 10px;"         for="email">Adresse email</label>
                        <div class="input-with-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="input-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <input type="email" id="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                            <span style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label style="margin-bottom: 10px;" for="password">Mot de passe</label>
                        <div class="input-with-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="input-icon"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <input type="password" id="password" name="password" placeholder="••••••••" required>
                        </div>
                        @error('password')
                            <span style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label style="margin-bottom: 10px;" for="password_confirmation">Confirmer le mot de passe</label>
                        <div class="input-with-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="input-icon"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3"></path></svg>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">
                        S'inscrire
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </form>

                <div class="divider">
                    <span>Ou inscrivez-vous avec</span>
                </div>

                <div class="social-login">
                    <button class="btn-social google">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .533 5.333.533 12S5.867 24 12.48 24c3.44 0 6.04-1.133 8.16-3.293 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.133H12.48z"/></svg>
                        Google
                    </button>
                    <button class="btn-social facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                        Facebook
                    </button>
                </div>

                <p class="auth-footer">
                    Vous avez déjà un compte ? <a href="#">Se connecter</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
