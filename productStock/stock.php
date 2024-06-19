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
                    echo "<div><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z'/></svg></div>";
                    echo "</button</td>";
                    echo "</form>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </body>
</html>