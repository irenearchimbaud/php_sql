database: structure: des tables (tableaux) avec des colonnes et des rangs 
on peut mettre en relation des bdd
id est unique

langage SQL:

SELECT: lire les données dans la table

SELECT nom_du_champ
FROM nom_du_tableau

cette requete va selectionner (SELECT) le champ "nom_du_champ_ provenant (FROM) du tableau appelé "nom_du_tableau"

WHERE est l'équivalent de if en SQL

SELECT DISTINC ma_colonne
FROM nom_du_tableau

le DISTINCT supprime les doubblons dans les résultats

Opérateurs de comparaison:
= <> != < > >= <=
IN
BETWEEN
LIKE
IS NULL
IS NOT NULL

AND ET OR (conditions)

exemple :

WHERE condition1 OR condition2
WHERE condition1 AND condition2

SELECT prenom
FROM utilisateur
WHERE prenom IN ('maurice', 'marie', 'timothée') // WHERE prenom = 'maurice' OR prenom = 'marie' OR prenom = 'timothée'

Connexion a la base de données

on utilise PDO pour établir une connexion à la base de données