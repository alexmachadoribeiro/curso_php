-- cria o banco cadastro
CREATE DATABASE IF NOT EXISTS cadastro;

-- seleciona o banco
USE cadastro;

-- cria a tabela usuario
CREATE TABLE IF NOT EXISTS Usuario (
    id_usuario INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    profissao VARCHAR(45),
    PRIMARY KEY (id_usuario)
);