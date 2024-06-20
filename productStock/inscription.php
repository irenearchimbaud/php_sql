<html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Inscription</title>
            <link rel="stylesheet" href="./style/style.css">
        </head>
        <body>
            <!-- <?php
                require_once './navbar.php';
            ?> -->
            <h1 class="productstock">ProductStock</h1>
            <div class="connexion-form-page">
            <h1>Inscription</h1>
                <form action="inscription_post.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" />
                    <label for="username">Identifiant:</label>
                    <input type="text" id="username" name="username" />
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" />
                    <label for="password">Confirmer le mot de passe:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" />
                    <div class="form-button-div">
                        <input type="submit" value="Inscription" />
                    </div>
                </form>
                Vous avez déjà un compte ? <a class="inscription-button" href="./connexion.php">connectez-vous</a>
            </div>
            <?php
                require_once './footer.php';
            ?>
        </body>
    </html>