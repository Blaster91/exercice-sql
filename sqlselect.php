1) Afficher tous les gens dont le nom est palmer: SELECT id, first_name, last_name FROM board WHERE last_name = 'palmer'
2) Afficher toutes les femmes: SELECT id, first_name, last_name, gender FROM `board` WHERE gender = "female"
3) Tous les états dont la lettre commence par N: SELECT state_code FROM `board` WHERE state_code LIKE 'n%'
4) Tous les emails qui contiennent google: SELECT id,first_name, last_name, email FROM `board` WHERE email LIKE '%google%'
5) Répartition par Etat et le nombre d’enregistrement par état (croissant):
6) Insérer un utilisateur, lui mettre à jour son adresse mail puis supprimer l’utilisateur:

INSERT INTO `board`(`id`,`first_name`, `last_name`, `email`, `gender`, `ip_address`, `birth_date`, `zip_code`, `country_code`) VALUES ('1003','romain','leroy','romain@codeur.online','homme','192.168.1.2','17/01/1996','58000','FR')

UPDATE `board` SET `email`='romain@live.fr' WHERE id='1003'

DELETE FROM `board` WHERE `id` = 1003

7) Nombre de femme et d’homme

8) Afficher l'âge de chaque personne, puis la moyenne d’âge des femmes et des hommes
