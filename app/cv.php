<?php
session_start();

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Récupérer les informations de l'utilisateur connecté
$user = $_SESSION['user'];

// Traitement du formulaire de modification du CV
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mettre à jour les informations du CV dans la base de données
    // Code pour mettre à jour le CV...
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Mon CV</h1>
        <p><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></p>
    </header>

    <div>
        <form method="POST">
            <div>
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" value="<?php echo $user['cv_title']; ?>" required>
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5" required><?php echo $user['cv_description']; ?></textarea>
            </div>
            <!-- Ajoute d'autres champs pour skills, experiences, educations, etc. -->
            <button type="submit">Sauvegarder</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Mon CV</p>
    </footer>
</body>
</html>