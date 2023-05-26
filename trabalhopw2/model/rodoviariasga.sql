create database rodoviariasga;
use rodoviariasga;

create table cadastros_clientes(
 id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
 usuario varchar(20) NOT NULL,
 email varchar(40) NOT NULL,
 senha varchar(30) NOT NULL
);

create table viagens(
 id2 int PRIMARY KEY NOT NULL AUTO_INCREMENT,
 destino varchar(40) NOT NULL,
 horario time NOT NULL,
 dataviagem date NOT NULL,
 valor double NOT NULL
);


create table passagens_clientes(
id3 int PRIMARY KEY NOT NULL AUTO_INCREMENT,
nomecompleto varchar(40) NOT NULL,
CPF varchar(20) NOT NULL,
telefone varchar(25) NOT NULL,
destinos varchar(40) NOT NULL,
dataviagem date NOT NULL,
horario time NOT NULL
);