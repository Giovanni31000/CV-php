<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);



    echo "<p>Merci, $name. Votre message a été envoyé avec succès.</p>";
}
//futur fonction pour recup les données et stocker les mails
?>