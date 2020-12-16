# Test-Full-Stack-Ademilar
# Criação banco de dados: 

create database testeademilar;

USE testeademilar;

create table cliente(
id int primary key auto_increment,
nome varchar(80),
email varchar(80),
senha varchar(80)
);
 insert into cliente (nome, email, senha) values ('teste', 'teste@gmail.com', 123);
