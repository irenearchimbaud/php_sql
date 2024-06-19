<?php
include_once './env.php';
if (isset($_GET['id'])) {
    $product_id = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $product_id]);
    $product = $stmt->fetchAll();
?>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Détail du produit</title>
            <link rel="stylesheet" href="./style/style.css">
        </head>
        <body>
            <?php
                require_once './navbar.php';
                require_once './footer.php';
            ?>
            <h1 class="productstock">ProductStock</h1>
            <?php
                echo "<h1>Détails du produit</h1>";
                echo "<div>";
                echo "<form method='post' action='update_product.php'>";
                echo "<input type='text' name='name' id='name' value='" . htmlspecialchars($product[0]['name']) . "'></input>";
                echo "<input type='text' name='price' id='price' value='" . htmlspecialchars($product[0]['price']) . "'></input>";
                echo "<input type='number' name='stock' id='stock' value='" . htmlspecialchars($product[0]['stock']) . "'></input>";
                echo "<input type='text' name='name' id='name' value='" . htmlspecialchars($product[0]['description']) . "'></input>";
                echo "<button type='submit'>Modifier</button>";
                echo "</form>";
                echo "</div>";
                echo "<button> Supprimer </button>";
            ?>
        </body>
    </html>
<?php
    
} else {
    echo "<p>Aucun produit sélectionné.</p>";
}
?>