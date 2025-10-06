drop database if exists sbventes ;
create database sbventes ;

use sbventes ;

create table client (

	id int auto_increment not null ,
	nom varchar(100) not null ,
	prenom varchar(100) not null ,
	mdp varchar(100) not null ,
	email varchar( 100 ) not null ,
	primary key(id)
) ;

create table facture (

	id int auto_increment not null ,
	dateEmission date not null ,
	dateReglement date ,
	modeReglement varchar( 20 ) ,
	idClient int not null ,
	primary key( id ) ,
	foreign key( idClient ) references client( id ) 

) ;

insert into client values
( NULL , 'ONESTAS' , 'Valentine' , 'azerty' , 'valentine.onestas@gmail.com') ,
( NULL , 'HAFIDI' , 'Nadiya' , 'azerty' , 'n.hafidi@gmail.com') ,
( NULL , 'OSARO' , 'Clémence' , 'azerty' , 'c.osaro@orange.fr' ) ,
( NULL , 'JADOUX' , 'Lucie' , 'azerty' , 'lucie.jadoux@gmail.com' ) ,
( NULL , 'KANNY' , 'Pauline' , 'azerty' , 'p.kanny@gmail.com' ) ,
( NULL , 'KARA' , 'Juliette' , 'azerty' , 'juliette.kara@gmail.com' ) ,
( NULL , 'LAURY' , 'Sophie' , 'azerty' , 'sophie.laury@gmail.com' ) , 
( NULL , 'BELLIL' , 'Rim' , 'azerty' , 'rim.bellil@gmail.com' ) ;


insert into facture values
( NULL , '2025-09-15' , '2025-09-20' , 'CB' , 7 ) ,
( NULL , '2025-09-15' , '2025-09-18' , 'Chèque' , 8 ) ,
( NULL , '2025-09-17' , NULL , NULL , 7 ) ,
( NULL , '2025-09-22' , NULL , NULL , 7 ) ,
( NULL , '2025-09-23' , NULL , NULL , 8 ) ;
