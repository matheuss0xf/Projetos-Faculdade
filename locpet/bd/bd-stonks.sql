CREATE DATABASE db_locpet;

CREATE TABLE dadosDono(
cpf CHAR(64) PRIMARY KEY,
nome VARCHAR(80) NOT NULL,
sobrenome VARCHAR(80) NOT NULL,
telefone CHAR(64) NOT NULL,
email VARCHAR(200) NOT NULL,
senha VARCHAR(255) NOT NULL
);

CREATE TABLE dadosPet(
idPet SMALLINT AUTO_INCREMENT PRIMARY KEY,
nomePet VARCHAR(60) NOT NULL,
raca VARCHAR(50) NOT NULL,
sexo VARCHAR(9) NOT NULL,
cor VARCHAR(30) NOT NULL,
idDono CHAR(64) REFERENCES dadosDono
);

CREATE TABLE `coleira` (
  `idColeira` SMALLINT AUTO_INCREMENT PRIMARY KEY,
  `codColeira` varchar(200) UNIQUE NOT NULL,
  `latitude` varchar(200),
  `longitude` varchar(200),
  `ruaAvenida` varchar(200),
  `numeroRua` varchar(5),
  `horarioAtiv` DATETIME,
  `idDonoColeira` CHAR(64) REFERENCES dadosDono
);
