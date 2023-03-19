use db_agora;

create table administrateur(
id_admin  int auto_increment primary key,
email varchar(100),
password varchar(100));
    
create table clients(
id_client int primary key auto_increment ,
nomprenoms varchar(100) ,
nomutilisateur varchar(20) ,
sexe varchar (10),
email varchar(100) ,
numtel bigint ,
adresse varchar(200) ,
mdp varchar(12) ,
typecartepaiement varchar(25) ,
Numcarte bigint ,
nomcarte varchar(50) ,
dateexpcarte varchar(150) ,
codeseccarte int (4));

create table panier
(
    id_client  int not null
        primary key,
    id_produit int not null,
    constraint id_client unique (id_client)
);

create table produits
(
    id_produit  int auto_increment primary key,
    nom  varchar(100)   not null,
    prix double not null,
    types varchar(20) null,
    descriptions varchar(10000) null,
    type_prix varchar(20) null,
    image varchar(1000) null,
    constraint id unique (id_produit));
    
create table fournisseurs
(
    id_fournisseur  int auto_increment primary key,
    nom  varchar(100)   not null,
    pseudo varchar(20)  not null,
	phone varchar(100) not null,
    addresse varchar(10000) null,
    password varchar(100) not null,
    image varchar(1000) null,
    constraint id unique (id_fournisseur));
    
create table commande
(
    id_commande  int auto_increment primary key,
    prix_total double not null,
    etat_cmd varchar(20) null,
    constraint id unique (id_commande),
	nom_client  varchar(100) not null,
	id_client int not null);

alter table commande add FOREIGN KEY (id_client) REFERENCES clients(id_client);
alter table commande add FOREIGN KEY (nom_client) REFERENCES clients(nomprenoms);
alter table panier add FOREIGN KEY (id_client) REFERENCES clients(id_client);
