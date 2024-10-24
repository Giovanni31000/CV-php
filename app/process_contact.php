<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Vous pouvez ajouter ici le code pour envoyer un e-mail ou enregistrer les données dans une base de données

    echo "<p>Merci, $name. Votre message a été envoyé avec succès.</p>";
}
?>