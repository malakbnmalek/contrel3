<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Contactez-nous</h1>
        <nav>
            <ul>
                <li><a href="index.php">Retour à l'accueil</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Formulaire de contact</h2>
        <form action="submit.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>
            <input type="submit" value="Envoyer">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 - Mon site web PHP</p>
    </footer>
</body>
</html>
