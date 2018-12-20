create database recu;
use recu;
create table users(
    id_user int auto_increment,
    user_email varchar(50),
    user_pass varchar(50),
    constraint pk_id_user primary key (id_user),
    constraint unq_user_email unique (user_email),
);

create table marios(
    id_mario int auto_increment,
    id_user int(50),
    velocidad varchar(50),
    fuerza varchar(50),
    inteligencia varchar(50),
    agilidad varchar(50),
    camiseta varchar(50),
    pantalon varchar(50),
    calzado varchar(50),
    constraint pk_id_mario primary key (id_mario),
    constraint fk_id_user FOREIGN key (id_user) REFERENCES users (id_user),
);

INSERT INTO users (user_email, user_pass) values ("demo@demo", "demo");