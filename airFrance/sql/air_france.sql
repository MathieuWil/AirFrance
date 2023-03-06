drop database if exists air_france; 
create database air_france; 

use air_france;

/******************************* USERS ********************************/

create table user (
	iduser int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	email varchar(50),
	mdp varchar(50),
	role enum ("admin", "pilote"),
	primary key (iduser)
);

insert into user values
	(null, "Pilote", "Maverick", "pilote@gmail.com", "123", "pilote");
insert into user values
	(null, "Pilote", "Moimeme", "moimeme@gmail.com", "123", "pilote");
insert into user values
  (null, "Admin", "Rigail", "admin@gmail.com", "456", "admin");

/***************************** AEROPORTS ******************************/

create table aeroport (
	idaeroport int(3) not null auto_increment,
	nomaeroport varchar(50),
	villeaeroport varchar(50),
	primary key (idaeroport)
);


/******************************* AVIONS ********************************/

create table avion (
	idavion int(3) not  null auto_increment,
	modele varchar(50),
  idaeroport int(3) not null,
	primary key (idavion),
  foreign key (idaeroport) references aeroport (idaeroport)
);

/******************************* VOLS *********************************/

create table vol (
	idvol int(3) not  null auto_increment,
	depart varchar(50),
	arrive varchar(50),
  idavion int(3) not null,
  idpilote int(3) not null,
	primary key (idvol),
  foreign key (idavion) references avion (idavion),
	foreign key (idpilote) references pilote (idpilote)
);