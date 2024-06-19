<?php
include_once './env.php';
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    }
    if($action == 'modify') {
        if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['stock']) && isset($_POST['description']) && isset($_GET['id'])) {
            $name = htmlspecialchars($_POST['name']);
            $price = htmlspecialchars($_POST['price']);
            $stock = htmlspecialchars($_POST['stock']);
            $description = htmlspecialchars($_POST['description']);
            $id = htmlspecialchars($_GET['id']);
    
            $sql = "UPDATE `products` SET `name`= :name ,`price`= :price,`stock`= :stock ,`description`= :description WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id, 'name' => $name, 'price' => $price, 'stock' => $stock, 'description' => $description]);
            $product = $stmt->fetchAll();
    
            header('Location: stock.php');
            exit();
        } else {
            echo "La modification à échouée. <br>";
            echo "<a href='./stock.php'>Revenir sur la page des stocks</a>";
        }
    } else if($action == 'delete') {
        if(isset($_GET['id'])) {
            $id = htmlspecialchars($_GET['id']);
            $sql = "DELETE FROM `products` WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            $product = $stmt->fetchAll();
            echo "Le produit a bien été supprimé.<br>";
            echo "<a href='./stock.php'>Revenir sur la page des stocks</a>";
        } else {
            echo "Une erreur est survenu lors de la suppression du produit. <br>";
            echo "<a href='./stock.php'>Revenir sur la page des stocks</a>";
        }
    } else {
        echo "Une erreur est survenue. <br>";
            echo "<a href='./stock.php'>Revenir sur la page des stocks</a>";
    }
?>