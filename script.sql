create table produits
(
    id           int auto_increment
        primary key,
    nom          varchar(100)   not null,
    prix         int            not null,
    types        varchar(20)    null,
    descriptions varchar(10000) null,
    type_prix    varchar(20)    null,
    image        varchar(1000)  null,
    constraint id
        unique (id)
);

<<<<<<< HEAD

=======

>>>>>>> e968f69a0617605f3e0adcd2cde6661338b779d6
