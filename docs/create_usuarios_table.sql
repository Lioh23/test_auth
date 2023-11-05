create database test_auth;

use test_auth;

create table usuarios (
	id int auto_increment primary key,
    nome varchar(200),
    email varchar(200),
    password_hash varchar(60),
    created_at datetime,
    updated_at datetime
);