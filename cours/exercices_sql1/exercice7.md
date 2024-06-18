SELECT * FROM `villes` WHERE LEFT(nom, 1) = 'A' OR LEFT(nom, 1) = 'B';
SELECT * FROM `villes` WHERE nom LIKE 'A%' OR nom LIKE 'B%';