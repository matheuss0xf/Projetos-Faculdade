CREATE DATABASE tente_nao_morrer DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE usuario (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(50) NOT NULL,
  nome varchar(100) NOT NULL,
  email varchar(100) NOT NULL unique,
  senha varchar(100) NOT NULL,
  qtd_mortes int(11) NOT NULL,
  qtd_morte_final int(11) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SELECT * FROM usuario UNION SELECT NULL, @@VERSION, NULL,NULL, NULL, NULL, NULL


