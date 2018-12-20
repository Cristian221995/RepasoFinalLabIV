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

create table real_states(
    id_real_state int auto_increment,
    id_user int,
    title varchar(50),
    description varchar (50),
    price int,
    bedrooms int,
    parking TINYINT, 
    image VARCHAR,
    constraint pk_id_vehicles primary key (id_vehicles),
    constraint unq_title unique (title),
    CONSTRAINT fk_id_user FOREIGN KEY (id_user) REFERENCES users (id_user)
);

INSERT INTO real_states (id_user, title, description, price, bedrooms, parking, image) VALUES (1, 'Vendo casa', 'amueblada', 5000, 2, 1, null);