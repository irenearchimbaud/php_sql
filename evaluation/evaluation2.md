1.
Pour déployer une instance Oracle Cloud Infrastructure (OCI), il faut dans un premier temps créer un compte sur Oracle Cloud pour avoir accès au tableau de bord OCI, et avoir également une clé SSH pour la connexion à la VM.

Dans un premier temps, il faut créer son serveur sur Apache (créer une instance) et associer notre clé SSH pour se connecter en ssh a notre serveur Oracle.

Ensuite, il faudra configurer la VM en se connectant et en mettant a jour les packages et installer et configurer Apache2.

Après cela, on va devoir installer PHP et mySQL sur le serveur pour que le code php puisse être interprété.

Il faudra également cloner notre projet depuis le dépot GIT afin de l'avoir sur le serveur, pour ensuite pouvoir configurer le PDO et déployer l'application en mettant notre application dans le fichier /var/www/html.

2.
Apache2 est un logiciel de serveur WEB, il permet de pouvoir héberger des applications WEB ainsi que des sites WEB gratuitement.

Pour configurer Apache2 sur un serveur Ubuntu, il faut dans un premier temps installer Apache2 sur ce serveur grace à cette commande:

    bash sudo apt install apache2 -y

Il faudra ensuite démarrer Apache2, et vérifier son lancement avec cette commande:

    bash sudo systemctl start apache2
    sudo systemctl enable apache2

Et ensuite, il faut vérifier que l'installation d'Apache2 a bien été installé correctement en se connectant à l'adresse IP publique de notre VM (pour ma part 144.24.206.44), et si la page de bienvenue d'Apache2 s'affiche, c'est que l'installation a réussie.

3.
Un virtual host dans Apache est une méthode qui permet d'héberger plusieurs applications WEB sur le meme serveur ou sur la meme adresse IP. Cela permet de partager le serveur pour plusieurs sites, qui peuvent avoir un nom de domaine différent.

Il est utile dans le déploiement des applications car, dans un premier temps, comme dit précedemment il permet d'héberger plusieurs sites sur un même serveur ce qui est relativement pratique.

Etant donné que l'on configure le virtual host dans le serveur, il n'y a pas de risques que si on modifie des informations par erreur dans notre projet php, cela ne forctionne plus si jamais on décide de redéployer l'application.

Enfin, la gestion des sites sera beaucoup plus simple car on pourra configurer plusieurs virtual hosts pour nos sites, et ainsi les configurations des sites n'affecteront que le site en question et pas les autres.

4.
Les avantages d'utiliser des variables d'environnement pour la configuration d'une application sont dans un premier temps la sécurité. En effet, les variables d'environnement contenant des informations sensibles comme des noms d'utilisateurs avec leur mot de passes associés ne seront pas stockées dans le code source et sur GIT, on pourra les configurer dans les variables directement dans le serveur ce qui sera plus sécurisé étant donné que n'importe qui ne pourra pas les récupérer dans notre code.

C'est pratique également car si un jour on a besoin de changer les variables, pas besoin de les changer partout dans le code source, on a juste a accéder au fichier qui les stockes sur le serveur et les modifier dans le serveur, cela n'affectera pas notre application et il y aura moins de chances que le déploiement rate.

Pour le déploiement de mon application, j'ai crée un fichier env-vars.conf dans /etc/apache2/conf-available dans lequel je vais stocker mes variables.

voici comment je déclare des variables dans ce fichier:

une fois dans /etc/apache2/conf-available et mon fichier env-vars.conf crée, j'exécute cette ligne de commande:

    sudo nano env-vars.conf

et je déclare mes variables avec le mot clé SetEnv, suivi du nom de ma variable et sa valeur associée entre guillemets:

    SetEnv USER "Jean"
    SetEnv PASSWORD "jean123"

Pour y accéder au sein de notre code (dans notre PDO) il suffit de déclarer nos variables php, et au lieu de leur associer la valeur en dur, on peut mettre la fonction getenv() et a l'interieur des parenthèses le nom de la variable dont on veut récupérer la valeur:

    $user = getenv('USER')
    $pass = getenv('PASSWORD')

5.
Pour établir une connexion SSH sécurisée vers une instance Ubuntu sur Oracle Cloud Infrastructure, il faudra dans un premier temps disposer d'une clé SSH, que l'on aura téléchargé sur notre ordinateur au préallable.

Il faudra ensuite ajouter cette clé SSH à notre instance dans le détail de notre instance afin d'autoriser la connexion a notre serveur uniquement avec cette clé SSH.

Enfin, il suffit de se connecter en SSH a notre serveur grace a la commande:

ssh -i C:\Users\nomDossier\Downloads\ssh-key-2024-07-16.key ubuntu@144.24.206.44

Et remplacer le chemin par le chemin dans lequel se trouve notre clé SSH sur notre PC.

6.
Dans un premier temps, avant d'installer PHP et mySQL, il faut mettre a jour les packages de la VM grace a ces commandes:

    sudo apt update
    sudo apt upgrade -y

Après cela, pour installer PHP, il faut que Apache2 soit installer et ensuite il faut éxécuter cette commande:

    bash sudo apt install php libapache2-mod-php php-mysql -y

Puis une fois installé, il faut redémarrer Apache2 pour charger les modules php, grace a cette commande:

    bash sudo systemctl restart apache2

Enfin, il faudra vérifier l'installation de PHP en créant un fichier php.info dans /var/www/html comme ceci:

    echo "<?php phpinfo(); ?>" | sudo tee /var/www/html/info.php

Enfin, il faudra accéder a https://<IP-de-votre-instance>/info.php pour voir la page d'information PHP.

Pour l'installation de mySQL, il faux exécuter cette commande:

    bash sudo apt install mysql-server -y

Il faudra ensuite sécuriser l'installation de mySQL en exécutant cette commande:

    bash sudo mysql_secure_installation

Il y aura ensuite des instructions pour établir le mot de passe de l'utilisateur root, où on pourra mettre ce qu'on veut.

Pour se connecter a mySQL avec notre utilisateur root, il suffit de taper cette commande:

    bash sudo mysql -u root -p

et il nous sera demandé d'entrer notre mot de passe configuré précedemment, et hop on sera connecté en tant qu'utilisateur root.

7.
GIT offre de nombreaux avantages dans un projet de développement de logiciel.
Dans un premier temps, GIT enregistre une trace de toutes les actions effectuées, donc si à un moment on a besoin de revenir a une version précédente, ou de traficoter quoi que ce soir au niveau des versions du code, on pourra grace a GIT. Il offre un historique complet de toutes les actions effectuées, et donc seront sauvegardées toutes les versions de l'application développées et donc on aura la possibilité de comparer ou revenir a certaines versions quand on veut.

GIT permet aussi de travailler sur différentes branches, ce qui permet de ne pas affecter le code de la branche principale, et donc de faire des vérifications avant de pousser la nouvelle version du code, et de ne pas affecter le code que l'on a pas modifié.

Grace aux branches, cela nous permet de séparer notre environnement de production ainsi que notre environnement de développement, et donc de ne pas affecter directement le code de production une fois une modification effectuée et poussée.

Dans mon cas, pour mon travail sur la VM Ubuntu, GIT a été d'autant plus pratique car j'avais juste a récupérer les modifications que j'avais poussées sur git en faisant un:

    git pull

cela me récupérais mes moddifications et je pouvais ainsi les voir apparaitre dans mon serveur WEB.

8.
Pour configurer et utiliser PDO avec mySQL sur un serveur Ubuntu, il faut dans un promier temps instaler PHP et mySQL, comme expliqué dans une question précédents 

Pour activer le PDO, il faudra se rendre dans le fichier php.ini et décommenter la ligne ou est affiché l'extension PDO ("extension=pdo_mysql" quelque chose qui ressemble a ceci)
Et il faudra procéder a un redémarrage d'apache comme pour l'installation de PHP:

    bash sudo systemctl restart apache2

voici à quoi ressemble mon fichier de configuration PDO qui me permet la connexion à ma base de données:

    $host = 'localhost';
    $db   = 'productStock';
    $user = getenv('USER2') ? getenv('USER2') : "root";
    $pass = getenv('PASSWORD2') ? getenv('PASSWORD2') : "Azerty123";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

Pour sécuriser mes requêtes SQL, dans un premier temps, j'utilise htmlspecialchars lors de la récupération des données ce qui empêche que les charactères spéciaux soient interprétés afin que si un hacker essaie d'entrer du code html, ou des requêtes SQL, cela ne soit pas interprété.

PDO m'offre aussi un moyen de sécuriser mes requêtes SQL,PDO utilise les requêtes préparées via la fonction prepare()

Voici un exemple de requête SQL sécurisée grace à PDO:

    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);
    $stock = htmlspecialchars($_POST['stock']);
    $description = htmlspecialchars($_POST['description']);

    $sql = "INSERT INTO `products`(`name`, `price`, `stock`, `description`) VALUES (:name, :price, :stock, :description)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'price' => $price, 'stock' => $stock, 'description' => $description]);
    $product = $stmt->fetchAll();