<?php
    include 'index.php';

    $prenom = $_POST['nom'];

    if(isset($prenom)) {
        echo 'Bonjour, ' . htmlspecialchars($prenom);
    } else  {
        echo 'Bonjour inconnu';
    }

    echo $prenom;
?>