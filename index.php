<?php
// Auteur: Yahia Ahmad



// Zorg ervoor dat de sessie is gestart
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check of de gebruiker is ingelogd
if (!isset($_SESSION['username'])) {
    echo "U bent niet ingelogd. <br><a href='login_form.php'>Login</a>";
    exit();
}

// De gebruikersnaam
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Welkom</title>
</head>
<body>

    <h1>Welkom op de homepagina!</h1>
    <p>Het spel kan beginnen!</p>
    <p>Je bent ingelogd met de gebruikersnaam: <?php echo $_SESSION['username']; ?></p>
    

    <a href="logout.php">Uitloggen</a>

</body>
</html>

