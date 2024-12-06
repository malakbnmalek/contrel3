<?php
// submit.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);  // Sécuriser les entrées pour éviter les injections XSS
    $message = htmlspecialchars($_POST['message']);
    
    // Afficher les données
    echo "<h2>Merci pour votre message, $name !</h2>";
    echo "<p>Votre message : $message</p>";
} else {
    echo "<h2>Erreur : Le formulaire n'a pas été soumis correctement.</h2>";
}
?>
