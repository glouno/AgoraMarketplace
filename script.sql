create table administrateur
(
    id_admin int auto_increment
        primary key,
    email    varchar(50)  null,
    password varchar(100) null
);

create table client
(
    id_client         int auto_increment
        primary key,
    nomprenoms        varchar(50)   null,
    nomutilisateur    varchar(50)   null,
    sexe              varchar(10)   null,
    email             varchar(50)   not null,
    numtel            varchar(50)   null,
    mdp               varchar(50)   null,
    typecartepaiement varchar(50)   null,
    adresse           varchar(1000) null,
    Numcarte          int           null,
    nomcarte          varchar(50)   null,
    codeseccarte      int           null,
    dateexpcarte      date          null,
    constraint id_client
        unique (id_client)
);

create table commande
(
    id_commande int auto_increment
        primary key,
    prix_total  double       not null,
    etat_cmd    varchar(20)  null,
    nom_client  varchar(100) not null,
    id_client   int          not null,
    constraint id
        unique (id_commande)
);

create index id_client
    on commande (id_client);

create index nom_client
    on commande (nom_client);

create table fournisseurs
(
    id_fournisseur int auto_increment
        primary key,
    nom            varchar(100)   not null,
    pseudo         varchar(20)    not null,
    phone          varchar(100)   not null,
    addresse       varchar(10000) null,
    password       varchar(100)   not null,
    image          varchar(1000)  null,
    constraint id
        unique (id_fournisseur)
);

create table panier
(
    id         int auto_increment
        primary key,
    id_client  int not null,
    id_produit int null,
    constraint id
        unique (id)
);

create index id_client
    on panier (id_client);

create table produits
(
    id           int auto_increment
        primary key,
    nom          varchar(100)   not null,
    prix         float          not null,
    types        varchar(20)    null,
    descriptions varchar(10000) null,
    type_prix    varchar(20)    null,
    image        varchar(1000)  null,
    constraint id
        unique (id)
)
    engine = InnoDB
    collate = utf8mb4_general_ci;


