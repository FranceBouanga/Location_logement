<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de connexion"media="screen">
    <title>Connexion</title>
    @vite('resources/css/login.css')
    <!--<link rel="stylesheet" href="resources/css/login.css"> <!-- Ajoutez ici le chemin correct de votre CSS -->
</head>
<body>
    <section class="login-container">
        <div class="login-card">
        <div class="login-header">
             <img src="{{ asset('images/lock.png') }}" alt="Icône cadenas" class="login-icon">
          
                <h2>Connectez-vous</h2>
          </div>
          </div>
            <form action="#" method="POST" class="login-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Se connecter</button>
                </div>
            </form>
            <div class="login-links">
                <a href="#">Mot de passe oublié ?</a>
                <a href="#">Je n'ai pas de compte</a>
            </div>
        </div>
    </section>
</body>
</html>
