/*1 : Sélectionner toutes les colonnes de la table SERV . */
SELECT * FROM serv;

/*2 : Sélectionner d’une autre manière ces colonnes .*/
SELECT NOSERV, SERVICE, ville FROM SERV;

/*3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV.*/
SELECT SERVICE NOSERV FROM SERV;

/*4 : Sélectionner toutes les colonnes de la table EMP.*/
SELECT * FROM EMP;

/*5 : Sélectionner les emplois de la table EMP.*/
SELECT emploi FROM EMP;

/*6 : Sélectionner les différents emplois de la table. */
SELECT DISTINCT emploi FROM EMP;

/*7 : Sélectionner les employés du service N°3.*/
SELECT * FROM EMP WHERE NOSERV = '3';

/*8 : Sélectionner les noms, prénoms, numéro d’employé, numéro de service de tous les techniciens.*/
SELECT nom, prenom, noemp, noserv FROM EMP WHERE emploi = 'TECHNICIEN';

/*9 : Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2.*/
SELECT service, noserv FROM SERV WHERE noserv > 2;

/*10 : Sélectionner les noms, numéros de service de tous les services dont le numéro est inférieur ou égal à 2.*/
SELECT service, noserv FROM SERV WHERE noserv <= 2;

/*11 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse.*/
SELECT * FROM emploi.EMP WHERE comm < sal;

/*12 : Sélectionner les employés qui ne touchent jamais de commission.*/
SELECT * FROM EMP WHERE comm IS NULL;

/*13 : Sélectionner les employés qui touchent éventuellement une commission et dans l’ordre croissant des commission. */
SELECT * FROM EMP WHERE comm IS NOT NULL ORDER BY comm ASC;

/*14 : Sélectionner les employés qui ont un chef .*/
SELECT * FROM EMP WHERE sup IS NOT NULL;

/* 15 : Sélectionner les employés qui n’ont pas de chef .*/
SELECT * FROM EMP WHERE sup IS NULL;

/*16 : Sélectionner les noms, emploi, salaire, numéro de service de tous les employés du service 5 qui gagnent plus de 20000 € */
SELECT nom, emploi, sal, noserv FROM EMP WHERE noserv = 5 AND sal> 20000;

/*17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou  égal à 9500 €*/
SELECT * FROM EMP WHERE noserv = 6 AND emploi = "VENDEUR" AND sal >= 9500;

/*18 : Sélectionner dans les employés tous les présidents et directeurs. Attention, le français et la logique sont parfois contradictoires. */
SELECT * FROM EMP WHERE emploi = 'PRESDIDENT' OR emploi = 'DIRECTEUR';

/*19 : Sélectionner les directeurs qui ne sont pas dans le service 3 .*/
SELECT * FROM EMP WHERE emploi = 'DIRECTEUR' AND noserv != 3;

/*20 : Sélectionner les directeurs et « les techniciens du service 1 » .*/
SELECT * FROM EMP WHERE emploi = 'DIRECTEUR' OR (emploi = 'TECHNICIEN' AND noserv = 1);

/*21 : Sélectionner les « directeurs et les techniciens » du service 1 */
SELECT * FROM EMP WHERE emploi IN ('DIRECTEUR', 'TECHNICIEN') AND noserv = 1;

/* 22 : Sélectionner les employés du service 1 qui sont directeurs ou techniciens */
SELECT * FROM EMP WHERE noserv = 1 AND (emploi = 'DIRECTEUR' OR emploi = 'TECHNICIEN');

/* 23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et travaillant dans le service 1*/
SELECT * FROM EMP WHERE emploi NOT IN ('DIRECTEUR', 'TECHNICIEN') AND noserv = 1;

/* 24 : Sélectionner les employés qui sont techniciens, comptables ou vendeurs .*/
SELECT * FROM EMP WHERE emploi IN ('TECHNICIEN', 'COMPTABLE', 'VENDEUR');

/*25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeurs */
SELECT * FROM EMP WHERE emploi NOT IN ('TECHNICIEN', 'COMPTABLE', 'VENDEUR');

/*26 : Sélectionner les directeurs des services 2, 4 et 5 */
SELECT * FROM EMP WHERE emploi = 'DIRECTEUR' AND noserv IN (2, 4, 5);

/*27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5 */
SELECT * FROM emp WHERE emploi != 'DIRECTEUR' and noserv NOT IN (1, 3, 5);

/*28 : Sélectionner les employés qui gagnent entre 20000 et 40000 euros, bornes comprises.*/
SELECT * FROM EMP WHERE sal BETWEEN 20000 AND 40000;

/*29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros. */
SELECT * FROM EMP WHERE sal < 20000 OR sal > 40000;

/*30 : Sélectionner les employés qui ne sont pas directeur et qui ont été embauchés en 88 .*/
SELECT * FROM emp WHERE emploi <> 'DIRECTEUR' AND YEAR(embauche) = 1988;

/*31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN. */
SELECT * FROM EMP WHERE noserv = 2 OR noserv = 3 OR noserv = 4 OR noserv = 5 AND emploi = 'DIRECTEUR';

/*32 :Sélectionner les employés dont le nom commence par la lettre M. */
SELECT * FROM emp WHERE nom LIKE 'M%';

/*33 : Sélectionner les employés dont le nom se termine par T. */
SELECT * FROM emp WHERE nom LIKE '%T';

/*34 : Sélectionner les employés ayant au moins deux E dans leur nom.*/
SELECT * FROM emp WHERE nom LIKE '%E%E%';

/*35 : Sélectionner les employés ayant exactement un E dans leur nom.*/
SELECT * FROM emp WHERE nom LIKE '%E%'AND nom NOT LIKE '%E%E%';

/*36 : Sélectionner les employés ayant au moins un N et un O dans leur nom.*/
SELECT * FROM emp WHERE nom LIKE '%N%' AND nom LIKE '%O%';


/*37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.*/
SELECT * FROM emp WHERE LENGTH(nom) = 6 AND RIGHT(nom, 1) = 'N';

/*38 : Sélectionner les employés dont la troisième lettre du nom est un R.*/
SELECT * FROM emp WHERE SUBSTRING(nom, 3, 1) = 'R';

/*39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères.*/
SELECT * FROM emp WHERE nom like "     ";
/*40 : Trier les employés (nom, prénom, n° de service, salaire) du service 3 par ordre de salaire croissant.*/
SELECT nom, prenom, noserv, sal FROM emp WHERE noserv = 3 ORDER BY sal ASC;

/*41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de salaire décroissant.*/
SELECT nom, prenom, noserv, sal FROM emp WHERE noserv = 3 ORDER BY sal DESC;

/* 42 : Idem en indiquant le numéro de colonne à la place du nom colonne.*/
SELECT nom, prenom, noserv, sal FROM emp WHERE noserv = 3 ORDER BY 4 DESC;

/* 43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire.*/
SELECT nom, prenom, noserv, sal, emploi FROM emp ORDER BY emploi, sal DESC;

/* 44 : Idem en indiquant les numéros de colonnes.*/
SELECT nom, prenom, noserv, sal, emploi FROM emp ORDER BY 5, 4 DESC;

/* 45 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre croissant de commission.*/
SELECT nom, prenom, noserv, comm FROM emp WHERE noserv = 3 ORDER BY comm ASC;

/* 46 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre décroissant de commission, en considérant que celui dont la commission est nulle ne touche pas de commission.*/
SELECT nom, prenom, noserv, comm FROM emp WHERE noserv = 3 and comm IS NOT NULL ORDER BY comm DESC;

/*47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés.*/
SELECT Nom, Prenom, emploi, SERVICE FROM EMP, serv WHERE EMP.noserv = serv.noserv;


/*48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés.*/
SELECT Nom, emploi, SERVICE, noserv FROM EMP NATURAL JOIN serv;


/*49 : Idem en utilisant des alias pour les noms de tables.*/
SELECT Nom, emploi, SERVICE, e.noserv FROM EMP AS e, serv AS s WHERE  e.noserv = s.noserv;

/*50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés.*/
SELECT e.Nom, e.emploi, s.* FROM emp e, serv s WHERE e.noserv = s.noserv;


/* 51 : Sélectionner les nom et date d'embauche des employés suivi des nom et date
d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre nom employés, noms supérieurs.*/


SELECT e2.Nom, e2.Embauche , e1.Nom, e1.Embauche FROM emp as e1, emp as e2 WHERe e2.sup = e1.noemp and e2.Embauche < e1.Embauche;

/* 52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms des techniciens du service 1 » avec un UNION.*/
SELECT Prenom FROM EMP WHERE Emploi = 'DIRECTEUR' UNION SELECT Prenom FROM emp WHERE Emploi = 'TECHNICIEN' AND noserv = 1;

/* 53 : Sélectionner les numéros de services n’ayant pas d’employés sans une jointure externe */
SELECT s.noserv FROM serv s LEFT JOIN EMP e ON s.noserv = e.noserv WHERE e.noemp IS NULL;

/* 54 : Sélectionner les services ayant au moins un employé.*/
SELECT DISTINCT s.* FROM serv s INNER JOIN emp e ON s.noserv = e.noserv;

/* 55 : Sélectionner les employés qui travaillent à LILLE.*/
SELECT nom FROM emp,serv WHERE emp.noserv = serv.noserv and Ville = 'LILLE';

/* 56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu.*/
SELECT e.* FROM emp e JOIN emp chef ON e.sup = chef.sup WHERE chef.Nom = 'DUBOIS' AND e.Nom != 'DUBOIS';

/* 57 : Sélectionner les employés embauchés le même jour que DUMONT.*/
SELECT * FROM emp WHERE DATE_FORMAT(embauche, '%Y-%m-%d') = (SELECT DATE_FORMAT(embauche, '%Y-%m-%d') FROM emp WHERE nom = 'DUMONT');

select * from emp where embauche = (select embauche from emp where nom = "DUMONT");

/* 58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches.*/
SELECT nom, embauche FROM emp WHERE embauche < (SELECT embauche FROM emp WHERE nom = 'MINET') ORDER BY embauche;

/* 59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN)*/
SELECT nom, prenom, embauche FROM emp WHERE embauche < ALL (SELECT embauche FROM emp WHERE noserv = 6);

/* 60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels.*/
SELECT nom, prenom, sal FROM emp WHERE sal > ANY (SELECT sal FROM emp WHERE noserv = 3) ORDER BY sal ASC;

/* 61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des personnes travaillant dans la même ville que HAVET.*/
SELECT e.nom, e.noserv, e.emploi, e.sal FROM emp e JOIN serv s ON e.noserv = s.noserv WHERE s.ville = (SELECT ville FROM emp WHERE nom = 'HAVET');
select * from emp where emp.noserv IN (select noserv from serv where ville = (select ville from serv where noserv =(select noserv from emp where nom = "HAVET"))));

/* 62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du service N°3.*/
SELECT * FROM emp WHERE noserv = 1 AND emploi IN (SELECT emploi FROM emp WHERE noserv = 3);

/* 63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.*/
SELECT * FROM emp WHERE noserv = '1' AND emploi NOT IN (SELECT emploi FROM emp WHERE noserv = '3');

/*64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi et un salaire supérieur à celui de CARON.*/
SELECT nom, prenom, emploi, sal FROM emp WHERE emploi = (SELECT emploi FROM emp WHERE nom = 'CARON') AND sal > (SELECT sal FROM emp WHERE nom = 'CARON');

/*65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du service des VENTES.*/
SELECT * FROM emp WHERE noserv = 1 AND emploi IN(SELECT emploi FROM emp WHERE emp.noserv = (SELECT noserv FROM serv WHERE service = "VENTES"));


/*66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le résultat dans l'ordre alphabétique des noms.*/
SELECT * FROM emp WHERE emp.noserv in (SELECT noserv FROM serv WHERE ville = 'LILLE') AND emploi = (SELECT emploi FROM emp WHERE nom = 'RICHARD')ORDER BY nom ASC;

/*67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.*/
SELECT * FROM emp WHERE sal > (SELECT AVG(sal) FROM emp AS e2 WHERE e2.noserv = emp.noserv) ORDER BY noserv;

/*68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année qu'un employé du service VENTES.
( année -> oracle : to_char(embauche,’YYYY’)> MYSQL: DATE_FORMAT(embauche,’%Y’)*/
SELECT * FROM emp  WHERE   noserv = '5' AND DATE_FORMAT(embauche, '%Y') IN (SELECT DATE_FORMAT(embauche, '%Y') FROM emp WHERE noserv = '2');

SELECT e.* FROM EMP e JOIN SERV s ON e.noserv = s.noserv WHERE s.service = 'INFORMATIQUE' AND DATE_FORMAT(e.embauche, '%Y') IN (SELECT DATE_FORMAT(embauche, '%Y')FROM EMP WHERE noserv = ( SELECT noserv FROM SERV WHERE service = 'VENTES'));

/*69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans le même service que leur supérieur hiérarchique direct.*/
select t1.nom, t1.emploi, ville from emp as t1, serv where t1.noserv = serv.noserv 
and t1.noserv NOT IN (select t2.noserv from emp as t2 where t1.sup = t2.noemp) 
and t1.sup IS NOT NULL;


SELECT e.nom, e.emploi, (SELECT ville FROM SERV WHERE noserv = e.noserv) AS ville FROM EMP e WHERE e.noserv <> (SELECT noserv FROM EMP WHERE noemp = e.sup);
/*70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des
subalternes, trier le résultat suivant le revenu décroissant.*/

SELECT nom, prenom, noserv, sal FROM EMP  WHERE noemp IN (SELECT DISTINCT sup FROM EMP WHERE sup IS NOT NULL) ORDER BY sal DESC;

/*71 : Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales pour tous les employés, dans l’ordre des revenus décroissants*/
SELECT nom, emploi, ROUND(sal/12, 2) AS revenu  FROM EMP ORDER BY revenu DESC;
SELECT nom, emploi, ROUND((sal + IFNULL(comm, 0))/12, 2) AS Revenu FROM EMP  ORDER BY Revenu DESC;

/*72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente plus que le double du salaire.*/
SELECT nom, sal, comm FROM EMP WHERE comm > 2 * sal;

/*73 : Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans l'ordre décroissant de ce pourcentage.*/
SELECT nom,  prenom,  emploi,  ROUND((comm / sal) * 100, 2) AS "% Commissions"FROM EMP WHERE emploi = 'Vendeur'ORDER BY "% Commissions" DESC;

SELECT nom, prenom, emploi, ROUND((comm / (sal/12)) * 100, 2) AS "% Commissions"FROM EMP WHERE emploi = 'Vendeur'ORDER BY "% Commissions" DESC;

/*74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs.*/
SELECT e.nom, e.emploi, s.service, ROUND((e.sal + IFNULL(e.comm, 0)), 0) AS "Revenu Annuel" FROM EMP e JOIN SERV s ON e.noserv = s.noserv WHERE e.emploi = 'Vendeur';
SELECT nom, emploi,(SELECT service FROM SERV WHERE noserv = e.noserv) AS service, ROUND((sal + IFNULL(comm, 0)), 0) AS "Revenu Annuel" FROM EMP e WHERE emploi = 'Vendeur';

/*75 : Sélectionner nom, prénom, emploi, salaire, commissions, revenu mensuel pour les employés des services 3,5,6 */

SELECT nom, prenom, emploi, sal, comm, ROUND(sal /12, 2) AS "Revenu Mensuel" FROM EMP WHERE noserv IN (3, 5, 6);


/*76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL.*/
SELECT nom, prenom, emploi, sal AS salaire, comm AS commissions, ROUND(sal /12, 2) AS "GAIN_MENSUEL"
FROM EMP WHERE noserv IN (3, 5, 6);
/*77 : Idem pour les employés des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAINMENSUEL*/
SELECT nom,  prenom,  emploi,  sal AS salaire, comm AS commissions,  ROUND(sal/12, 2) AS GAINMENSUEL FROM EMP WHERE noserv IN (3, 5, 6);

/*78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près.*/
SELECT nom, emploi, sal AS "Salaire Mensuel", sal / 22 AS "Salaire Journalier", sal / (22 * 8) AS "Salaire Horaire", ROUND(sal / 22, 2) AS "Salaire Journalier Arrondi", ROUND(sal / (22 * 8), 2) AS "Salaire Horaire Arrondi" FROM EMP WHERE noserv IN (3, 5, 6);

/*79 : Idem sans arrondir mais en tronquant.*/

SELECT nom,emploi, TRUNCATE(sal / 22.0, 2) AS salaire_journalier_tronque, TRUNCATE(sal / (22.0 * 8), 2) AS salaire_horaire_tronque FROM emp WHERE noserv IN (3, 5, 6);

/*80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale.*/
SELECT e.nom, e.prenom, e.emploi, CONCAT(SUBSTRING(s.service, 1, 1), ' ----> ', s.ville) AS "Service et Ville" FROM EMP e JOIN SERV s ON e.noserv = s.noserv;


/*89 : Sélectionner nom, emploi, date d'embauche des employés du service 6*/
SELECT nom, emploi, embauche FROM emp WHERE noserv = 6;

/*90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée embauche.*/
SELECT nom, emploi, DATE_FORMAT(embauche, '%d-%m-%y') AS embauche FROM emp WHERE noserv = 6;

/*91 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month yyyy'*/
SELECT nom, emploi, DATE_FORMAT(embauche, '%W %d %M %Y') AS embauche FROM emp WHERE noserv = 6;

/*92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month(abv) yy'*/
SELECT nom, emploi, DATE_FORMAT(embauche, '%W %d %b %y') AS embauche FROM emp WHERE noserv = 6;

/*115 : Afficher l'emploi, l'effectif, le salaire moyen pour tout type d'emploi ayant plus de deux représentants.*/
SELECT emploi, COUNT(*) AS effectif, AVG(sal) AS salaire_moyen FROM emp GROUP BY emploi HAVING COUNT(*) > 2;


/*116 : Sélectionner les services ayant au mois deux vendeurs.*/
SELECT s.noserv, s.service, COUNT(e.noemp) AS nombre_vendeurs FROM serv s JOIN emp e ON s.noserv = e.noserv WHERE e.emploi = 'VENDEUR' GROUP BY s.noserv, s.service HAVING COUNT(e.noemp) >= 2;



/*121 : Augmenter de 10% ceux qui ont un salaire inférieur au salaire moyen. Valider.*/
UPDATE emp SET sal = (sal * (1.10)) WHERE sal < (SELECT AVG(sal) FROM emp);


/*122 : Insérez vous comme nouvel employé embauché aujourd’hui au salaire que vous
désirez. Valider.*/
INSERT INTO emp1 VALUES (1200, "Bourahla", "Tina", "Full Stack", 1500, 2023-10-06, 15000, NULL);


/*123 : Effacer les employés ayant le métier de SECRETAIRE. Valider.*/
DELETE FROM emp1 WHERE emploi = 'SECRETAIRE';

/*124 : Insérer le salarié dont le nom est MOYEN, prénom Toto, no 1010, embauché le 12/12/99,supérieur 1000, pas de comm, service no 1, salaire vaut le salaire moyen des employés.Valider.*/
INSERT INTO emp1 (noemp, nom, prenom, embauche, sup, comm, noserv, sal) SELECT 1010, 'MOYEN', 'Toto', '1999-12-12', 1000, NULL, 1, AVG (sal) from emp;

/*125 : Supprimer tous les employés ayant un A dans leur nom. Faire un SELECT sur votre table pour vérifier cela. Annuler les modifications et vérifier que cette action s’est biendéroulée.*/
BEGIN;
DELETE FROM emp1 WHERE nom LIKE '%A%';  Supprimer tous les employés ayant un "A" dans leur nom
SELECT * FROM emp1;  Sélectionner pour vérifier les modifications
ROLLBACK;  Annuler les modifications 

/*126 : Les verrous. Supprimer l’employé créé à l’exercice 122 de votre voisin. Ne pas valider. Vérifiez tous les deux le contenu de la table. Demander à votre voisin d’augmenter son propre salaire de 1000 €. Valider la suppression. Chacun vérifie l’action. Refaire l’exercice en échangeant les rôles.*/


/*127 : Créer les tables EMP1 et SERV1 comme copie des tables EMP et SERV.*/
CREATE TABLE EMP1 AS SELECT * FROM EMP;
CREATE TABLE SERV1 AS SELECT * FROM SERV;


/* 128 : Vérifier que la table PROJ n’existe pas.*/

SELECT CASE WHEN NOT EXISTS ( SELECT 1 FROM information_schema.TABLES WHERE TABLE_NAME = 'PROJ' AND TABLE_SCHEMA = 'emploi' ) THEN 'La table PROJ n''existe pas.' ELSE 'La table PROJ existe.' END AS Result;


/*129 : Créer une table PROJET avec les colonnes suivantes:
numéro de projet (noproj), type numérique 3 chiffres, doit contenir une valeur. nom de projet (nomproj), type caractère, longueur = 10
budget du projet (budget), type numérique, 6 chiffres significatifs et 2 décimales.
 
 */
 CREATE TABLE PROJET (
    noproj INT CHECK (noproj >= 100 AND noproj <= 999) ,
    nomproj VARCHAR(10),
    budget DECIMAL(8,2),
    PRIMARY KEY (noproj)
);
--Vérifier l'existence de la table PROJET.
SELECT CASE WHEN EXISTS ( SELECT 1 FROM information_schema.TABLES WHERE TABLE_NAME = 'PROJET' AND TABLE_SCHEMA = 'emploi' ) THEN 'La table PROJET existe.' ELSE 'La table PROJET n''existe pas.' END AS Result;
 
 --Faire afficher la description de la table PROJET.
 DESCRIBE PROJET;
 --C’était une erreur!!! Renommez la table PROJET en PROJ
 RENAME TABLE PROJET TO PROJ;
 
 
/* 130 :
Insérer trois lignes de données dans la table PROJ: numéros des projets = 101, 102,
103
noms des projets = alpha, beta, gamma budgets = 250000, 175000, 950000
Afficher le contenu de la table PROJ.
Valider les insertions faites dans la table PROJ.*/

--Insérer trois lignes de données dans la table PROJ
INSERT INTO PROJ (noproj, nomproj, budget) VALUES (101, 'alpha', 250000.00), (102, 'beta', 175000.00), (103, 'gamma', 950000.00);
SELECT * FROM PROJ;

/* 131 :
Modifier la table PROJ en donnant un budget de 1.500.000 Euros au projet 103.
Modifier la colonne budget afin d'accepter des projets jusque 10.000.000.000 d’EurosRetenter la modification demandée 2 lignes au dessus.*/

UPDATE PROJ SET budget = 1500000.00 WHERE noproj = 103;

ALTER TABLE PROJ MODIFY budget DECIMAL(15, 2);


/* 132 :
Ajouter une colonne NOPROJ (type numérique) à la table EMP.
Afficher le contenu de la table EMP.*/

ALTER TABLE EMP ADD NOPROJ INT;
SELECT * FROM EMP;