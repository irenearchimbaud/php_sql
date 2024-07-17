<?php
    include_once './createProduct.php';
    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['stock']) && isset($_POST['description'])) {
        $name = htmlspecialchars($_POST['name']);
        $price = htmlspecialchars($_POST['price']);
        $stock = htmlspecialchars($_POST['stock']);
        $description = htmlspecialchars($_POST['description']);
    
            $sql = "INSERT INTO `products`(`name`, `price`, `stock`, `description`) VALUES (:name, :price, :stock, :description)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['name' => $name, 'price' => $price, 'stock' => $stock, 'description' => $description]);
            $product = $stmt->fetchAll();
    
            header('Location: stock.php');
            exit();
    }
?>