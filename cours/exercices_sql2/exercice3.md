1/
ALTER TABLE stagiaire ADD telephone VARCHAR(255);

2/
ALTER TABLE stagiaire ADD UNIQUE (email);

3/
ALTER TABLE stagiaire ADD adresse VARCHAR(255) AFTER prenom;
ALTER TABLE users ADD email VARCHAR(255);

4/
ALTER TABLE stagiaire DROP adresse;

5/
ALTER TABLE stagiaire CHANGE telephone tel VARCHAR(255);

6/
ALTER TABLE stagiaire MODIFY COLUMN tel VARCHAR(255) NOT NULL;

7/
ALTER TABLE stagiaire ADD sexe VARCHAR(255) AFTER date_naissance;

8/
ALTER TABLE stagiaire MODIFY COLUMN sexe VARCHAR(255) NOT NULL;

9/
ALTER TABLE stagiaire MODIFY COLUMN sexe CHAR(1);

10/
ALTER TABLE stagiaire ADD CONSTRAINT chk_sexe CHECK (sexe IN ('M', 'F'));

11/
ALTER TABLE stagiaire ADD pays VARCHAR(255) AFTER email;

12/
ALTER TABLE stagiaire MODIFY COLUMN pays VARCHAR(2);

13/
ALTER TABLE stagiaire ADD CONSTRAINT chk_pays CHECK (pays IN ('FR', 'BE', 'CH'));
