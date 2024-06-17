<?php
    if(isset($_POST['username']) && $_POST['username'] === 'admin' && isset($_POST['password']) && $_POST['password'] === 'admin') {
        header('Location: index.php');
        exit();
    } else {
        header('Location: connexion.php');
        exit();
    }
?>