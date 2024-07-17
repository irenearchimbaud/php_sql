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

CREATE TABLE products ( id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, price int NOT NULL, stock int NOT NULL, description TEXT NOT NULL);
CREATE TABLE users ( id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, confirmPassword VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL);

3/
INSERT INTO stagiaire (nom, prenom, date_naissance, email)
VALUES 
('Glory', 'Tania', 2003-03-21, 'glorytania@gmail.com'),
('Jones', 'Davis', 2000-05-30, 'davisjones@gmail.com'),
('Arterchery', 'Milla', 2000-12-14, 'milla.art@gmail.com'),
('Ghillem', 'Jhon', 2001-09-27, 'jhon.ghillem@gmail.com'),
('Depardieu', 'Thomas', 2002-05-05, 'depardieuthomas@gmail.com')