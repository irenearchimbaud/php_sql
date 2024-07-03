1/
Pour configurer mon environnement de développement php sur mon ordinateur, j'ai das un premier temps installé xampp qui esst un logiciel dans lequel est installé Apache, mySQL et PHP prinncipalement. Grace à xampp, on pourra lire les fichiers php dans le navigateur avec comme host: localhost ou 127.0.0.1, suivi du nom du dossier et du nom du fichier qu'on souhaite lire. Il faut ensuite placer son dossier dans lequel se trouve notre code php dans le dossier "htdocs" présent dans le dossier xampp installé sur l'ordinateur. Je vais ensuite pouvoir démarrer les modules MySql et Apache dans le centre de controle de xampp, afin de lancer mon projet dans le navigateur. Je peux également accéder à ma base de données sur le port: localhost/phpmyadmin ou 127.0.0.1/phpmyadmin.

2/
Dans le fichier php.ini se trouve tous les paramètres de configuration de php. Cette semaine, le fichier php.ini nous a servi pour la configuration de l'extension PDO afin de relier la base de données mySQL à notre projet PHP.

3/
En PHP, on déclare les variables en mettant le symbole dollard devant. Exemple: $name = 'irene'
Ici, j'ai déclaré une variable de type string appelée "name" qui a pour valeur 'irene'
PHP gère les types de données tout seul, c'est à dire que lorsque je délare une variable, je n'ai pas besoin de déclarer son type (String, Int, etc), car lorsque je vais lui assigner une valeur, PHP va comprendre quel type de valeur c'est.

4/
En php, on peut déclarer des classes. En effet, lors de la déclaration de classes, on doit ajouter a la classe un constructor grace à la fonction __construct() dans laquelle on pourra déclarer les différentes propriétés de la classe. On peut également retrouver dans une classe diverses autres methods que l'on peut créer, dont on pourra se reservir pour une instance de cette classe.
Pour déclarer unne classe, on doit utiliser le mot clé "class" suivi du nom qu'on soihaite donner a la classe.
On écrit ensuite le constructor, et pour déclarer de nouvelles instances de notre classe, on doit déclarer une variable, qu'on associe a "new" + le nom de notre classe ainsi que les propriétés qu'on doit déclarer.
exemple:
// déclaration de la classe
class Product {
    public function __construct(private $name, private $price) {

    }
}

// nouvelle instance de la classe Product
$product1 = new Product('doliprane', 10);

5/
Une variable locale ne peut être utilisée que dans le bloc ou elle est déclarée tandis qu'une variable globale peut être utilisée dans tout le code de la page.
exemple:
function nom() {
    // variable locale
    $name = '';
}

//variable globale
$name = '';

6/
Pour définir une fonction php on doit utiliser le mot clé "function" suivi du nom de ma fonction ainsi que des parenthèses avec les arguments à passer s'il y en a.
On met ensuite des accolades et notre code à l'intérieur de ces accolades.
exemple:
function calcul(a, b) {
    echo a + b;
}

7/
Une fonction définie par l'utilisateur est une fonction que l'on va inventer, on va la définir soi même comme dans la question ci-dessus, tandis qu'une fonction intégrée en PHP est une fonction qui existe déjà dans PHP que l'on peut utiliser où on veut dans notre code sans avoir besoin de la créer.
exemple:

// j'utilise ici la fonction isset pour vérifier que la variable name est définie
isset($name)

// j'utilise ici ma fonction calcul qui calcule la somme des deux valeurs passées en arguments
function calcul(a, b) {
    echo a + b;
}
calcul(1, 2)

8/


9/
Pour créer une base de données en SQL, il faut se rendre dans phpMyAdmin, cliquer sur nouvelle base de données et aller dans l'onglet SQL dans lequel on tapera cette commande:
CREATE DATABASE nom_de_ma_bdd;
USE nom_de_ma_bdd;

exemple:
CREATE DATABASE formation;
USE formation;

Pour créer une table, on se rend dans l'onglet SQL dans la bdd que l'on vient de créer et on utilise cette commande:
CREATE TABLE nom_de_ma_table (paramètres)

exemple:

CREATE TABLE stagiaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    email VARCHAR(255) NOT NULL
);

10/
Pour séléctionner toutes les lignes d'une table MySQL il faut exécuter cette commande dans la table en question (il faut faire un SELECT):
SELECT * FROM nom_de_ma_table WHERE 1

11/
Pour mettre à jour une ligne spécifique dans une table MySQL, il faut exécuter cette commande: (il faut faire un UPDATE)
UPDATE nom_de_ma_table SET propriete_a_changer ='[nouvelle_valeur]' WHERE id = id_de_la_ligne_a_changer;

exemple:
UPDATE `stagiaire` SET `prenom`='[Jhonny]' WHERE id = 2;

12/
Pour supprimer une ligne d'une table MySQL , il faut exécuter cette commande: (il faut faire un DELETE)
DELETE FROM nom_de_ma_table WHERE id = id_de_l_element_a_changer;

exemple:
DELETE FROM `stagiaire` WHERE id = 2;

13/


14/
Pour créer une nouvelle table via l'interface phpMyAdmin, il faut cliquer sur la base de données dans laquelle on veut créer la table. Une fenêtre sera affichée avec comme intitulé: "créer une table". Il suffira alors d'entrer le nom de la table que l'on veut créer et d'indiquer le nombre de colonnes que l'on veut (correspondra au nombbre de propriétés dans la table) et il faut appuyer sur créer. Il faudra alors créer les colonnes (définir un nom, un type etc) directement via l'interface et appuyer sur le bouton "enregistrer".

15/
Pour télécharger xampp il faut se rendre sur le site officiel, et telecharger le fichier. Il faut ensuite lancer le fichier .exe pour démarrer l'installation. Dans xampp se trouve le serveur WEB Apache qui nous permettra de lancer nos projets php dans le navigateur, xampp installera aussi php ainsi que mySQL, phpMyAdmin (qui servira pour les bases de données) ainsi que Pers.

16/
Pour accéder au tableau de bord de xampp, il suffit juste de lancer l'application xampp, celui-ci ouvrira automatiquement le tableau de bord. Pour démarrer et arreter les services Apache et mySQL il suffit de cliquer sur le bouton "start" a coté de Apache et mySQL et pour les arrêter il suffit de cliquer sur le bouton "stop" à coté de Apache et mySQL.