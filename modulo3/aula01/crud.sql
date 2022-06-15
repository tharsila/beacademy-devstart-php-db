USE db_escola;

/* inserir 1 registro */
INSERT INTO tb_professor(nome, email, cpf)
VALUES ('Zezim', 'zezim@email.com', '45897524897');

/* inserir multiplos registros */
INSERT INTO tb_professor(nome, email, cpf)
VALUES 
('Zezim', 'zezim@email.com', '45897524897'),
('Chiquim', 'chquin@email.com', '88997524897'),
('Luizin', 'luizin@email.com', '45878224897');

/* excluir 1 registro */
DELETE FROM tb_professor WHERE id='1';

/* excluir todos */
DELETE FROM tb_professor;

/* editar dados 1 registro */
UPDATE tb_professor SET nome='Luiz' WHERE cpf= '45878224897';

/* editar dados de todos os registros */
UPDATE tb_professor SET nome='Luizin';

/* selecionar todos os dados de todos os professores */
SELECT * FROM tb_professor;

/* selecionar todos os dados do professor de id=5 */
SELECT * FROM tb_professor WHERE id='5';

/* selecionar alguns dados de todos os professores */
SELECT nome, cpf FROM tb_professor;