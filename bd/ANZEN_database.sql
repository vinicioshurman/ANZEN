CREATE DATABASE anzen;

DROP DATABASE anzen;

SHOW DATABASES;

USE anzen;

SHOW TABLES;

DROP TABLE usuario;
DROP TABLE cartao;
DROP TABLE fluxoCartao;
DROP TABLE fluxoGeral;
DROP TABLE categoria;

DESC usuario;
DESC cartao;
DESC fluxoCartao;
DESC fluxoGeral;
DESC categoria;

CREATE TABLE usuario(
	id_usuario INT(5) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(40) NOT NULL,
	email VARCHAR(40) NOT NULL,
    senha VARCHAR(40) NOT NULL
	PRIMARY KEY (id_usuario)
);

CREATE TABLE cartao(
	id_cartao INT(5) NOT NULL PRIMARY KEY,
    id_usuario INT(5) NOT NULL,
	nome VARCHAR(150),
	FOREIGN KEY(id_usuario)	REFERENCES usuario(id_usuario)
);

CREATE TABLE fluxoCartao(
	id_fluxoCartao INT(5) PRIMARY KEY,
    id_cartao INT(5) NOT NULL,
	dt DATE NOT NULL,
	nome VARCHAR(150),
    valor DECIMAL(8,2),
	sts CHAR(1),
	parcelas INT(3),
	FOREIGN KEY(id_cartao) REFERENCES cartao(id_usuario)
);

CREATE TABLE fluxoGeral(
    id_fluxoGeral INT(5) PRIMARY KEY,
    id_usuario INT(5) NOT NULL,
	nome VARCHAR(150),
    dt DATE,
    valor DECIMAL(8,2),
	sts CHAR(1),
    FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario),
);

CREATE TABLE categoria(
	id_categoria INT(5) PRIMARY KEY,
    id_fluxoGeral INT(5) NOT NULL,
	nome VARCHAR(150),
	FOREIGN KEY(id_fluxoGeral) REFERENCES fluxoGeral(id_fluxoGeral)
);