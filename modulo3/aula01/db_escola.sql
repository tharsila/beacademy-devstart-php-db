/* para criar um banco de dados */
CREATE DATABASE db_escola;

/* selecionar o banco de dados */
USE db_escola;

/* cria tabela */
CREATE TABLE tb_professor (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE tb_aluno (
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  matricula VARCHAR(10) UNIQUE NOT NULL
);

CREATE TABLE tb_curso (
  nome VARCHAR(100) UNIQUE NOT NULL,
  duracao VARCHAR(50) NOT NULL,
  horario VARCHAR(50) NOT NULL,
  preco VARCHAR(10) NOT NULL
);

CREATE TABLE tb_disciplina (
  nome VARCHAR(100) UNIQUE NOT NULL,
  professor VARCHAR(100) NOT NULL
);

/* excluir tabela */
DROP TABLE tb_professor;

/* mostra tabela(s) */
SHOW TABLE;
SHOW TABLES;

/* inserir dados */
INSERT INTO tb_professor(nome, email, cpf)
VALUES(
  'Alessandro', 'alessandro@email.com', '12312312312'
);

INSERT INTO tb_professor(nome, email, cpf)
VALUES(
  'Bruno', 'bruno@email.com', '42242242222'
);

/* selecionar os dados */
SELECT * FROM tb_professor;