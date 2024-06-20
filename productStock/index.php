
<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
    header('Location: connexion.php');
    exit();
}
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <?php
            require_once './navbar.php';
            require_once './footer.php';
            include './env.php';
        ?>
        <h1 class="productstock">ProductStock</h1>
        
    </body>
</html>