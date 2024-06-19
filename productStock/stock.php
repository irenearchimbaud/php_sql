<!-- <?php include './products/Product.php' ?> -->
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Stock</title>
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
    <?php
        require_once './navbar.php';
        require_once './footer.php';
        include_once './env.php';
        $sql = "SELECT * FROM products WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
    ?>
    <h1 class="productstock">ProductStock</h1>
    <button> <a href="./createProduct.php"> Ajouter un produit </a></button>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Prix à l'unité (€)</th>
                    <th>Stock</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($products as $product) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($product['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($product['price']) . " €</td>";
                    if($product['stock'] === 0) {
                        echo "<td>Rupture de stock.</td>";
                    } else {
                        echo "<td>" . htmlspecialchars($product['stock']) . "</td>";
                    }
                    echo "<form method='GET' action='productDetail.php'>";
                    echo "<td><button class='productDetail-button' name='id' value='" . htmlspecialchars($product['id']) . "'>";
                    echo "<div><svg xmlns='http://www.w3.org/2000/svg'  width='20'  height='20'  viewBox='0 0 24 24'  fill='none'  stroke='currentColor'  stroke-width='2'  stroke-linecap='round'  stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><path d='M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4' /><path d='M13.5 6.5l4 4' /></svg></div>";
                    echo "</form>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </body>
</html>