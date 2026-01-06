<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié - Beauté & Mode</title>
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/inscription.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/lg.png') }}">   
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <div class="auth-container">
        <!-- Return Button -->
        <a href="/connexion" class="btn-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Retour
        </a>

        <!-- Left Side: Image -->
        <div class="auth-image-side">
            <img src="{{ asset('assets/lp.jpg') }}" alt="Support" class="auth-bg-image">
            <div class="auth-overlay">
                <div class="overlay-content">
                    <h1>Pas de panique.</h1>
                    <p>Nous allons vous aider à récupérer l'accès à votre compte en quelques étapes simples.</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Form -->
        <div class="auth-form-side">
            <div class="form-wrapper">
                <div class="brand-logo">
                    <img src="{{ asset('assets/lg.png') }}" alt="Logo">
                </div>
                
                <h2>Réinitialisation</h2>
                <p class="subtitle">Entrez votre email pour recevoir le lien de réinitialisation</p>

                @if (session('status'))
                    <div style="background-color: #d1fae5; color: #065f46; padding: 10px; border-radius: 8px; margin-bottom: 20px; font-size: 0.9rem;">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST" class="auth-form">
                    @csrf
                    <div class="form-group">
                        <label style="margin-bottom: 10px;"  for="email">Adresse email</label>
                        <div class="input-with-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="input-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <input type="email" id="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                            <span style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn-submit">
                        Envoyer le lien
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </button>
                </form>

                <p class="auth-footer">
                    Vous vous souvenez de votre mot de passe ? <a href="/connexion">Se connecter</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
