1/
CREATE DATABASE formation;
USE formation;

2/
CREATE TABLE stagiaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    email VARCHAR(255) NOT NULL
);

3/
INSERT INTO stagiaire (nom, prenom, date_naissance, email)
VALUES 
('Glory', 'Tania', 06/03/2002, 'glorytania@gmail.com'),
('Jones', 'Davis', 07/08/2000, 'davisjones@gmail.com'),
('Arterchery', 'Milla', 30/01/2002, 'milla.art@gmail.com'),
('Ghillem', 'Jhon', 05/05/2003, 'jhon.ghillem@gmail.com'),
('Depardieu', 'Thomas', 22/07/2001, 'depardieuthomas@gmail.com')