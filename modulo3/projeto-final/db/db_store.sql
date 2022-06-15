CREATE DATABASE db_store;

USE db_store;

/* cria a tabela */
CREATE TABLE tb_category (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL
);

CREATE TABLE tb_product (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL,
  photo VARCHAR(255) NOT NULL,
  valor FLOAT(5,2) NOT NULL,
  categoria_id INT(11) NOT NULL,
  quantity INT(5) NOT NULL,
  created_at DATETIME NOT NULL
);

/* inserir dados */
INSERT INTO tb_category (name, description) 
VALUES 
  ('Eletrônicos', 'Tv, Notebook, Mouse e etc'),
  ('Ferramentas', 'Furadeira, Martelo, Chave de Fenda e etc'),
  ('Automovivo', 'Cera de Carnaúba, Pneu Pretinho, Aspirador Portátil e etc');

INSERT INTO tb_product(name, description, valor, quantity)
VALUES
  ('TV', 'TV de 32 polegadas', '1500', '10'),
  ('Martelo', 'Martelo uso domestico', '30', '5'),
  ('Mouse', 'Mouse 1000 dpi', '15', '30'),
  ('Cera de Carnaúba', 'Cera Automotiva Liquida', '40', '8'),
  ('Notebook', 'Notebook Vaio i5 10gen', '2200', '10');