<?php
require('./env.php');

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['username'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    $username = htmlspecialchars($_POST['username']);
    $id = '';

    if($password === $confirmPassword) {
        $password = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users (`id`, `email`, `password`, `username`) VALUES (:id, :email, :password, :username)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id, 'email' => $email, 'password' => $password, 'username' => $username]);

        echo "Inscription réussie";
        header('Location: connexion.php');
        exit();
    } else {
        echo "inscription échouée <br/>";
        echo "<a href='./inscription.php'> Revenir la page d'inscription </a>";
    }   
} else {
    echo "formulaire incomplet <br/>";
    echo "<a href='./inscription.php'> Revenir la page d'inscription </a>";
}