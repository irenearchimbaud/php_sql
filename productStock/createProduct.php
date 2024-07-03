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
            <title>Création d'un produit</title>
            <link rel="stylesheet" href="./style/style.css">
        </head>
        <body>
            <?php
                require_once './navbar.php';
                require_once './footer.php';
                include './env.php';
            ?>
            <h1 class="productstock">ProductStock</h1>
            <h1>Détails du produit</h1>
            <div class='product-detail-form'>
                <form method='post' action='create_product.php'>
                    <label for='name'>Nom:</lavel>
                    <input type='text' name='name' id='name'></input>
                    <label for='price'>Prix:</lavel>
                    <input type='number' name='price' id='price'></input>
                    <label for='stock'>Stock:</lavel>
                    <input type='number' name='stock' id='stock'></input>
                    <label for='description'>Description:</lavel>
                    <textarea name='description' id='description' name="description"></textarea>
                    <button type='submit' name='action' value='modify'>Créer</button>
                    </form>
        </body>
    </html>