Afficher tous les gens dont le nom est palmer: SELECT id, first_name, last_name FROM board WHERE last_name = 'palmer'
Afficher toutes les femmes: SELECT id, first_name, last_name, gender FROM `board` WHERE gender = "female"
Tous les états dont la lettre commence par N: SELECT state_code FROM `board` WHERE state_code LIKE 'n%'
Tous les emails qui contiennent google: 
