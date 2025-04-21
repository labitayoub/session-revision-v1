exercice 1::

SELECT utilisateurs.nom, profils.bio
FROM utilisateurs
JOIN profils ON utilisateurs.id = profils.utilisateur_id
JOIN profil_langue ON profil_langue.profil_id = profils.id
JOIN langues ON langues.id = profil_langue.langue_id
WHERE utilisateurs.role = 'freelance'
AND langues.nom = 'Anglais'
AND profil_langue.niveau = 'avancé';


exercice 2::
SELECT utilisateurs.nom, profils.bio
FROM utilisateurs
JOIN profils ON utilisateurs.id = profils.utilisateur_id
JOIN profil_competence ON profils.id = profil_competence.profil_id

GROUP BY utilisateurs.nom
HAVING COUNT(profil_competence.competence_id) >3;

exercice 3::

SELECT utilisateurs.nom, profils.tarif_horaire
FROM utilisateurs
JOIN profils ON utilisateurs.id = profils.utilisateur_id
WHERE profils.disponible ='true'
AND utilisateurs.role = 'freelance'

exercice 4::

SELECT utilisateurs.nom
FROM utilisateurs
LEFT JOIN profils ON utilisateurs.id = profils.utilisateur_id
WHERE profils.id IS NULL;

exercice 5::

SELECT utilisateurs.nom
FROM utilisateurs
LEFT JOIN projets ON utilisateurs.id = projets.client_id
WHERE projets.client_id IS NULL;

exercice 6::

SELECT projets.titre, projets.budget
FROM projets
LEFT JOIN offres ON projets.id = offres.projet_id
WHERE projets.statut ='ouvert'

exercice 7::

SELECT offres.projet_id,offres.freelance_id, offres.prix_propose
FROM offres
WHERE offres.prix_propose >100

exercice 8::

SELECT offres.projet_id,offres.freelance_id, offres.prix_propose
FROM offres
GROUP by offres.projet_id
HAVING COUNT(offres.projet_id)>=3;
