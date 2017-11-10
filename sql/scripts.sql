CREATE DATABASE IF NOT EXISTS FESTON;

CREATE TABLE CADASTRO_EVENTO(
	ID_EVENTO INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME_EVENTO VARCHAR(50) NOT NULL,
	ATRACOES_EVENTO VARCHAR(300) NOT NULL,
	DATA_EVENTO DATE NOT NULL,
	HORARIO_INICIO_EVENTO TIME NOT NULL,
	HOTARIO_TERMINO_EVENTO TIME,
	ID_PAIS VARCHAR(20) NOT NULL,
	ID_ESTADO VARCHAR(20) NOT NULL,
	ID_CIDADE VARCHAR(50) NOT NULL,
	ENDERECO_EVENTO VARCHAR(50) NOT NULL,
	QUANTIDADE_INGRESSOS INT NOT NULL,
	PRECO_INGRESSOS INT NOT NULL,
	FOTO_EVENTO VARCHAR(100),
	ORGANIZADOR_EVENTO VARCHAR(30)
);

CREATE TABLE CADASTRO_USUARIO(
	ID_USUARIO INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	USERNAME VARCHAR(30) NOT NULL UNIQUE,
	NOME_USUARIO VARCHAR(50) NOT NULL,
	DATA_NASCIMENTO DATE NOT NULL,
	EMAIL_USUARIO VARCHAR(50) NOT NULL UNIQUE,
	SENHA_USUARIO VARCHAR(32) NOT NULL,
	ID_PAIS VARCHAR(30) NOT NULL,
	ID_ESTADO VARCHAR(30) NOT NULL,
	ID_CIDADE VARCHAR(50) NOT NULL,
	FOTO_USUARIO VARCHAR(100)
);
