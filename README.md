# AirFrance
Projet Ecole 2

Enoncé donné par le professeur


* Air France gestion des vols 
	les tables : pilote, avion, aeroport, vol, user 
	la table vol a deux clés étrangères : avion, pilote 
	la table avion contient une clé étrangère de aeroport 
	- Programmer les opérations CRUD : création (ajout), Read (lecture), Update, Delete et recherche sur les tables avec des droits.
	User  : voir tout 
	Pilote : voit que ses vols et les avions et les aeroports.
  
  
  
  Donc pour résumer.
  
    - Une page connexion avec
      - utilisateur admin
      - utilisateur pilote
  
    - Une page acceuil
      - Design à la charge du groupe
  
  
Sur chacune des 3 pages suivantes
l'admin pourra:
  - Créer un objet (Qui sera ajouté à la base de donnée mySQL)
  - Modifier un objet
  - Supprimer un objet
  - Voir les objets
  
Le pilote pourra
  - Voir les objets
  
  
  
    - Une page aéroports
  
    - Une page avions
  
    - Une page vols
      - Les pilotes ne voient que les vols qui leurs sont attribués, là ù les admins voient tous les vols
  
  
