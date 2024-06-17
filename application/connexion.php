<html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Connexion</title>
            <link rel="stylesheet" href="./style/style.css">
        </head>
        <body>
            <?php
                require_once './navbar.php';
            ?>
            <div class="connexion-form-page">
                <form action="connexion_post.php" method="POST">
                    <label for="username">Identifiant:</label>
                    <input type="text" id="username" name="username" />
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" />
                    <div class="form-button-div">
                        <input type="submit" value="Se connecter" />
                    </div>
                </form>
            </div>
            <?php
                require_once './footer.php';
            ?>
        </body>
    </html>
