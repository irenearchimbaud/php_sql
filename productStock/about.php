
<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
    header('Location: connexion.php');
    exit();
}
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>A propos</title>
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <?php
            require_once './navbar.php';
            require_once './footer.php';
            include './env.php';
        ?>
        <h1 class="productstock">A propos</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo nisi sed ipsum tristique, ac porttitor eros bibendum. Mauris at tortor quis leo convallis eleifend sit amet ut libero. Quisque ac metus vestibulum, consectetur lacus non, dapibus justo. Nullam venenatis mauris ut arcu malesuada sollicitudin. Phasellus euismod, velit eget bibendum condimentum, libero ipsum fermentum risus, nec ultrices magna tortor id mi. Curabitur vitae velit a odio molestie varius id sed mi. Sed scelerisque gravida odio eget sagittis. Sed sed velit eget mauris faucibus dictum eget ac justo. Proin auctor, enim id lacinia pharetra, nisl purus ultricies nisi, nec consequat justo turpis vel risus. Ut et enim vel turpis iaculis ullamcorper. Vivamus sed purus ut velit cursus tristique. Proin tristique arcu nec fringilla cursus.</p>
        
    </body>
</html>