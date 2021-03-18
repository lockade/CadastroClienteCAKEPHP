drop database if exists crudcliente;
create database crudcliente;

use crudcliente;

create table if not EXISTS clientes(
	id int primary key AUTO_INCREMENT,
    nome varchar(100) not null,
    email varchar(50) not null,
    telefone varchar(11) not null,
    cep int(8) not null,
    logradouro varchar(100) not null,
    numero varchar(10) not null,
    complemento varchar(100) null,
    bairro varchar(100) not null,
    cidade varchar(30) not null,
    estado varchar(2) not null
);

/*
DELIMITER //
CREATE PROCEDURE insert_generic_registers()
BEGIN
  DECLARE v1 INT UNSIGNED DEFAULT 1;
  DECLARE v2 char(5);
  WHILE v1 < 100 DO
	SET v2 = CONVERT(v1, char);
    insert into clientes(nome, email, telefone, cep, logradouro, numero, complemento, bairro, cidade, estado) values(concat('cliente', v2), concat('cliente', v2, '@hotmail.com'), '16993386693', 14750000, 'rua ', v2, 'Casa', 'Gumercindo', 'Pitangueiras','SP');
	SET v1 = v1 + 1;
  END WHILE;
END; //

call insert_generic_registers(); 
*/