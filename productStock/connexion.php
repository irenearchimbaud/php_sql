<html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Connexion</title>
            <link rel="stylesheet" href="./style/style.css">
        </head>
        <body>
            <h1 class="productstock">ProductStock</h1>
            <div class="connexion-form-page">
            <h1>Connexion</h1>
                <form action="connexion_post.php" method="POST">
                    <label for="username">Identifiant:</label>
                    <input type="text" id="username" name="username" />
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" />
                    <div class="form-button-div">
                        <input type="submit" value="Se connecter" />
                    </div>
                </form>
                Vous n'avez pas de compte ? <a class="inscription-button" href="./inscription.php">Inscrivez-vous</a>
            </div>
            <?php
                require_once './footer.php';
            ?>
        </body>
    </html>
