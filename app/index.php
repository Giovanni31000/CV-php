<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV - Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Bienvenue sur mon CV</h1>
    </header>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mon CV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cv.php">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
            <?php if (isLoggedIn()): ?>
                <span class="navbar-text">
                    Bonjour, <?php echo $_SESSION['user']['first_name']; ?> <?php echo $_SESSION['user']['last_name']; ?>
                </span>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Salut, je suis [Ton Nom]!</h1>
            <p class="lead">Voici mon CV interactif. Explorez les différentes sections pour en savoir plus sur moi et mes projets.</p>
        </div>
    </div>
    
    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 Mon CV. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>