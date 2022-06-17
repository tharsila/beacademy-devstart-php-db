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
  value FLOAT(6,2) NOT NULL,
  category_id INT(11) NOT NULL,
  quantity INT(5) NOT NULL,
  created_at DATETIME NOT NULL
);

/* inserir dados */
INSERT INTO tb_category (name, description) 
VALUES 
  ('Eletrônicos', 'Tv, Notebook, Mouse e etc'),
  ('Ferramentas', 'Furadeira, Martelo, Chave de Fenda e etc'),
  ('Automovivo', 'Cera de Carnaúba, Pneu Pretinho, Aspirador Portátil e etc');

INSERT INTO tb_product(name, description, photo, value, category_id, quantity, created_at)
VALUES
  ('Martelo', 'Martelo uso domestico','https://cdn.leroymerlin.com.br/products/martelo_de_unha_27mm_tramontina_90709234_0001_300x300.jpg', 30, 2, 5, '2022-06-17 10:21:15'),
  ('TV', 'TV de 32 polegadas', 'https://imgs.extra.com.br/55002768/1g.jpg?imwidth=292', 1500.00, 1, 10, '2022-06-17 10:06:25' ),
  ('Mouse', 'Mouse 1000 dpi', 'https://imgs.extra.com.br/55026730/1xg.jpg?imwidth=292', 30, 1, 10, '2022-06-17 10:21:25' ),
  ('Notebook', 'Notebook Vaio i5 10gen', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRnYpCWhf0Z7EbnSmtbKXA-Bm-6l0zeAoGZJWVpTaEwxci8lD1hQKtNmGI2pjV5e4HjC4aB-PIzKtyigOuv-fIv_PWDKIWUcQevaQMhcYdFSYdU-EMGKLYnpA&usqp=CAE', 2200, 1, 10, '2022-06-17 10:24:25' );
  ('Cera de Carnaúba', 'Cera Automotiva Liquida', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4M0xuXWF69zSn3_ZOBvxqzFoRhF2TuJdSqA&usqp=CAU', 40, 3, 8, '2022-6-17 10:23:05');
