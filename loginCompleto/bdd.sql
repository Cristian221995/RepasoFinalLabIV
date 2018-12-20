create database repaso;
use repaso;
create table users(
    id_user int auto_increment,
    user_email varchar(50),
    user_name varchar(50),
    user_pass varchar(50),
    constraint pk_id_user primary key (id_user),
    constraint unq_user_email unique (user_email),
    constraint unq_user_name unique (user_name)
);