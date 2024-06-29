

-- cria base de dados chamada gestao
create database gestao;

-- coloca a base de dados em uso
use gestao;

drop table usuarios;
-- cria a tabela de usuarios
CREATE TABLE usuarios (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	nomeCompleto VARCHAR(200) NOT NULL,
	usuario VARCHAR(60) NOT NULL UNIQUE,
	senha VARCHAR(32) NOT NULL,
	nivel INT NOT NULL,
	dataCriacao TIMESTAMP NOT NULL DEFAULT NOW(),
	dataAlteracao TIMESTAMP NOT null
	);