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
        var_dump($products);
        echo $products['name'];
    ?>
    <h1 class="productstock">ProductStock</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Prix à l'unité (€)</th>
                    <th>Stock</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($products as $product) {
                    echo "<tr>";
                    echo "<td> $product->name </td>";
                    echo "<td> $product->price $ </td>";
                    echo "<td> $product->stock </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </body>
</html>