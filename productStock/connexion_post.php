<?php
require './env.php';
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $sql = 'SELECT * FROM users WHERE username = :username';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $passwordHash = $user['password'];
        if (password_verify($password, $passwordHash)) {
            $_SESSION['authenticated'] = true;
            header('Location: index.php');
            exit();
        } else {
            echo "Identifiants invalides <br/>";
            echo "<a href='./connexion.php'> Revenir à la page de connexion</a>";
        }
    } else {
        echo "Identifiants invalides <br/>";
        echo "<a href='./connexion.php'> Revenir à la page de connexion</a>";
    }
} else {
    echo "Formulaire incomplet <br/>";
    echo "<a href='./connexion.php'> Revenir à la page de connexion</a>";
}
?>