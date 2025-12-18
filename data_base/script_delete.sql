-- CRUD (Create, Read, Update, Delete).
-- Delete: Excluir.

-- Esse comando EXCLUI TODO o Banco de Dados!
DROP DATABASE db_exemplo;

-- Esse comando EXCLUI a Tabela do Banco de Dados!
DROP TABLE tb_exemplo;

DELETE FROM tb_usuario WHERE id_usuario = 3;

DELETE FROM tb_empresa WHERE id_empresa = 3;

DELETE FROM tb_movimento WHERE id_movimento IN (1, 12, 8, 2, 10, 9);

delete from tb_usuario where id_usuario = 11;